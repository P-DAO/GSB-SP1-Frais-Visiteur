<?php

namespace App\Controller;

use App\Controller;
use App\Controller\AccueilController;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

use App\Entity\Visiteur;
use App\Entity\Fraisforfait;
use App\Entity\Lignefraisforfait;
use App\Entity\Lignefraishorsforfait;
use App\Entity\Fichefrais;
use App\Entity\Etat;


use App\Form\VisiteurType;
use App\Form\LoginVisiteurType;

use App\Repository\VisiteurRepository;
use App\Repository\FichefraisRepository;
use App\Repository\FraisforfaitRepository;
use App\Repository\LignefraisforfaitRepository;

class VisiteurController extends AbstractController
{
    public function seConnecterVisiteur(Request $request)
    {
        $visiteur = new Visiteur();
        $formVisiteur = $this->createForm(LoginVisiteurType::class, $visiteur);

        $formVisiteur->handleRequest($request);

        if($formVisiteur->isSubmitted() && $formVisiteur->isValid()){
            $doctrine = $this->getDoctrine();
            $em= $this->getDoctrine()->getManager();
            $login = $formVisiteur['login']->getData();
            $mdp=$formVisiteur['mdp']->getData();
            $visiteur = $doctrine->getRepository(Visiteur::class)->seConnecterVisiteur($login, $mdp);
            //dump($visiteur);
            $idVis = $visiteur->getId();
//-------------------     test de la crétion de la fiche à la connexion 
            if(!empty($visiteur)){
                $idVis = $visiteur->getId();

                // Obtenit la date        
                if(date("d") > 17 ){
                    $month = date("m");
                    $year = date("Y");
                }
                else{
                    if(date("m") == 01){
                        $month = 12;
                        $year = date("Y")-1;
                    }
                    else{
                        $month = date("m")-1;
                        $year = date("Y");
                    }  
                }
                $date = sprintf("%02d%04d", $month, $year);
                //dump($date);

                //existe -t-il une fiche pour ce mois
                $ficheFrais = $doctrine->getRepository(Fichefrais::class)->getUneFicheFraisExiste($idVis, $date);
                //dump($ficheFrais);
                $fraisForfait = $doctrine->getRepository(Fraisforfait::class)->getLesFraisForfait();

                $session = new Session();

                if($ficheFrais === null){ 
                    $ficheFraisNew = new FicheFrais();

                    $etat = $doctrine->getRepository(Etat::class)->find("CR");
                    $dateNow = new \DateTime("now");

                    $ficheFraisNew->setMois($date);
                    $ficheFraisNew->setNbjustificatifs(0);
                    $ficheFraisNew->setMontantvalide(0);
                    $ficheFraisNew->setDatemodif($dateNow);
                    $ficheFraisNew->setIdetat($etat);
                    $ficheFraisNew->setIdvisiteur($visiteur);
                    dump($ficheFraisNew);

                    $em->persist($ficheFraisNew);

                    if($em->contains($ficheFraisNew)){
                        foreach($fraisForfait as $unFraisForfait){
                            $ligneFraisForfait = new LigneFraisForfait();

                            $ligneFraisForfait->setIdVisiteur($visiteur);
                            $ligneFraisForfait->setMois($date);
                            $ligneFraisForfait->setIdFraisForfait($unFraisForfait);
                            $ligneFraisForfait->setQuantite(0); 
                            dump($ligneFraisForfait);
                            $em->persist($ligneFraisForfait);
                            
                        }
                        $em->flush();
                    }
                }
//-------------------         
                $session->set('nom',$visiteur->getNom());
                $session->set('prenom',$visiteur->getPrenom());
                $session->set('id',$visiteur->getId());
                $_SESSION['visiteur'] = $visiteur;

                dump($session);
                return $this->redirect('saisir');
            }
            else{
                return $this->render('visiteur/seConnecterVisiteur.html.twig', [
                    'formVisiteur'=>$formVisiteur->createView(), 
                    'erreur' => false,  
                ]);
            }
        }

        return $this->render('visiteur/seConnecterVisiteur.html.twig', [
            'formVisiteur'=>$formVisiteur->createView(),   
        ]);
    }

    public function saisir(Request $request){
        $em= $this->getDoctrine()->getManager();
        $doctrine = $this->getDoctrine();

        $session = $request->getSession();
        $idVis = $session->get('id');
        dump($idVis);
        if(date("d") > 17 ){
            $month = date("m");
            $year = date("Y");
        }
        else{
            if(date("m") == 01){
                $month = 12;
                $year = date("Y")-1;
            }
            else{
                $month = date("m")-1;
                $year = date("Y");
            }  
        }
        $date = sprintf("%02d%04d", $month, $year);
        dump($date);
//------------------------------test pour la saisie

        $ficheFrais = $em->getRepository(FicheFrais::class)->getUneFicheFrais($idVis, $date);
        dump($ficheFrais);
        $ligneFraisForfait = $em->getRepository(LigneFraisForfait::class)->getFraisForfaitDuMois($idVis, $date);
        dump($ligneFraisForfait);

//------------------------------
       
        return $this->render('saisir/show.html.twig',[
            'controller_name' => 'VisiteurController'
        ]);
    }

    public function seDeconnecter(Request $request){
        $session = $request->getSession();
        $session -> clear();
        return $this->redirect('connexion');
    }

    //Avant la consultation de la ficheFrais précise
    public function choixMois(Request $request){
        $session= $request->getSession();

        $listMois = array();
        for($i = 1; $i<=12; $i++){
            $listMois[$i] = $i;
        }

        $listAnnee = array();
        for($i = date("Y"); $i>= date("Y")-10; $i--){
            $listAnnee[$i] = $i;
        }

        $formDate = $this->createFormBuilder()
                    ->add('mois', ChoiceType::class, array('label'=> false , 'attr' => array(
                        'class'=> 'custom-select'), 'choices'  => array(
                            'Mois :' => array($listMois),
                    )))         
                    ->add('annee', ChoiceType::class, array('label'=> false , 'attr' => array(
                        'class'=> 'custom-select'), 'choices'  => array(
                            'Années :' => array($listAnnee),
                    )))
                    ->getForm();

        $request =Request::createFromGlobals();
        $formDate->handleRequest($request);
        
        //Si lance la selection
        if ($formDate->isSubmitted() && $formDate->isValid()){ //formulaire valide
            $data = $formDate->getData();//Récupère les données soumises

            //variable
            $idVis = $session->get('id');
            $date = sprintf("%02d%04d", $data['mois'], $data['annee']);

            //récup doctrine
            $em = $this->getDoctrine()->getManager();

            //récup la fiche du mois
            $fraisMois = $em->getRepository(Fichefrais::class)->getUneFicheFrais($idVis, $date);
            //dump($fraisMois);

            if(!empty($fraisMois)){
                $tabFichefrais = array();
                foreach($fraisMois as $unFrais){
                    array_push($tabFichefrais,
                    array(
                        "mois" => $unFrais->getMois(),
                        "nbjustificatifs" => $unFrais->getNbjustificatifs(),
                        "montantvalide" => $unFrais->getMontantvalide(),
                        "datemodif" => $unFrais->getDatemodif(),
                        "idetat" => $unFrais->getIdetat()->getLibelle(),
                        "idvisiteur" => $unFrais->getIdvisiteur()
                    ));
                }
                return $this->render('visiteur/consulter.html.twig',[
                    'formDate'=>$formDate->createView(), 
                    'fiches' => $tabFichefrais,  
                    'selection' => false,
                ]);
            }
            else{
                return $this->render('visiteur/consulter.html.twig',[
                    'formDate'=>$formDate->createView(),
                    'fiches' => null,  
                    'selection' => false,

                ]);
            }
        }
        //S'il n'y a pas de RECHERCHE faite 
        else{
            $idVis =$session->get('id');
            //dump($idVis);
            $em = $this->getDoctrine()->getmanager();

            //Récup de toutes les fiches Frais
            $fraisMois = $em->getRepository(Fichefrais::class)->getFichesFrais($idVis);
            //dump($fraisMois);

            if(!empty($fraisMois)){
                //dans un tableau on récupère toutes le fiches
                //dans un autre tableau on récupère tous les frais par fiches
                $tabFichefrais = array();
                foreach($fraisMois as $unFrais){
                    array_push($tabFichefrais,
                    array(
                        "mois" => $unFrais->getMois(),
                        "nbjustificatifs" => $unFrais->getNbjustificatifs(),
                        "montantvalide" => $unFrais->getMontantvalide(),
                        "datemodif" => $unFrais->getDatemodif(),
                        "idetat" => $unFrais->getIdetat()->getLibelle(),
                        "idvisiteur" => $unFrais->getIdvisiteur()
                    ));
                }
                return $this->render('visiteur/consulter.html.twig',[
                    'formDate'=>$formDate->createView(), 
                    'fiches' => $tabFichefrais,  
                    'selection' => false,

                ]);
            }
            else{
                return $this->render('visiteur/consulter.html.twig',[
                    'formDate'=>$formDate->createView(), 
                    'fiches' => null,  
                    'selection' => false,

                ]);
            }
        }
    }
    //Consultation de la fiche sélectionnée
    public function consulter(Request $request, $date){
        $session = $request->get('id');
        dump($session);
        dump($date);

        return $this->render('visiteur/consulter.html.twig');
    }

    //Modification de mot de passe
    public function modifierMdp(Request $request){
        $session = $request->getSession();
        $idVis = $session->get('id');

        $em= $this->getDoctrine()->getManager();

        $leVisiteur = $em->getRepository(Visiteur::class)->getVisiteur($idVis);
        dump($leVisiteur);
        dump($leVisiteur[0]->getMdp());

        //Formulaire
        $formMdp = $this->createFormBuilder(array('allow_extra_field' => true))
            ->add('vieuxMdp', PasswordType::class, array(
                'label' => 'Mot de passe actuel',
                'attr' => array('class' => 'form-control',)
            ))
            ->add('newMdp', PasswordType::class, array(
                'label' => 'Nouveau mot de passe',
                'attr' => array('class' => 'form-control',)
            ))
            ->add('newMdpBis', PasswordType::class, array(
                'label' => 'Répétez le nouveau mot de passe',
                'attr' => array('class' => 'form-control',)
            ))
            ->getForm();

        //Creation du formulaire
        $request = Request::createFromGlobals();
        $formMdp->handleRequest($request);
        
        //Traitement
        if($formMdp->isSubmitted() && $formMdp->isValid()){
            //recup data
            $data = $formMdp->getData();
            
            $vieuxMdp = $data['vieuxMdp'];
            $newMdp = $data['newMdp'];
            $newMdpBis = $data['newMdpBis'];

            //erreur de saisi du vieux mdp
            if($vieuxMdp != $leVisiteur[0]->getMdp()){
                return $this->render('visiteur/gestionMdp.html.twig', [
                    'formMdp' => $formMdp->createView(),
                    'vieuxMdpInvalid' => true,
                    'sucess' => false,
                    'newMdpMatchPas' => false,
                ]);
            }
            //erreur entre les 2 new mdp
            elseif($newMdp != $newMdpBis){
                return $this->render('visiteur/gestionMdp.html.twig', [
                    'formMdp' => $formMdp->createView(),
                    'vieuxMdpInvalid' => false,
                    'sucess' => false,
                    'newMdpMatchPas' => true,
                ]);

            }
            //enregistrement si tout va bien
            else{
                //modification du mdp
                $leVisiteur[0]->setMdp($newMdp);

                //MAJ BD
                $em->flush();

                return $this->render('visiteur/gestionMdp.html.twig', [
                    'formMdp' => $formMdp->createView(),
                    'vieuxMdpInvalid' => false,
                    'newMdpMatchPas' => false,
                    'sucess' => true,
                ]);
            }
        }
        else{
            return $this->render('visiteur/gestionMdp.html.twig', [
                'formMdp' => $formMdp->createView(),
                'vieuxMdpInvalid' => false,
                'sucess' => false,
                'newMdpMatchPas' => false,
            ]);
        }
    }

    //modifications données personnelles
    public function personnelles(Request $request){
        $session = $request->getSession();
        $idVis = $session->get('id');

        $em= $this->getDoctrine()->getManager();

        
        $leVisiteur = $em->getRepository(Visiteur::class)->getVisiteur($idVis);
        //$adresse= $leVisiteur[0]->getAdresse();
        //dump($adresse);
        $formPerso = $this->createFormBuilder()
            ->add('nom', TextType::class, array('attr' => array('value' => $leVisiteur[0]->getNom() )))
            ->add('prenom', TextType::class, array('attr' => array('value' => $leVisiteur[0]->getPrenom() )) )
            ->add('login', TextType::class, array('attr' => array('value' => $leVisiteur[0]->getLogin() )) )
            ->add('adresse', TextType::class, array('attr' => array('value' => $leVisiteur[0]->getAdresse() )) )
            ->add('cp', TextType::class, array('attr' => array('value' => $leVisiteur[0]->getCp() )) )
            ->add('ville', TextType::class, array('attr' => array('value' => $leVisiteur[0]->getVille() )) )
            ->getForm();

        $request = Request::createFromGlobals();
        $formPerso->handleRequest($request);


        if($formPerso->isSubmitted() && $formPerso->isValid()){
            //recup données
            $data = $formPerso->getData();
            $nom = $data['nom'];
            $prenom= $data['prenom'];
            $login= $data['login'];
            $adresse= $data['adresse'];
            $cp= $data['cp'];
            $ville= $data['ville'];

            //modifier le visiteur et enregistrer dans BD
            $leVisiteur[0]->setAdresse($adresse);
            $leVisiteur[0]->setCp($cp);
            $leVisiteur[0]->setVille($ville);

            $em->flush();

            return $this->redirectToRoute('personnelles');
        }

        return $this->render('visiteur/visiteurPerso.html.twig',[
            'formPerso' => $formPerso->createView(),
        ]);
    }






    
}
 