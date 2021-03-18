<?php

namespace App\Controller;

use App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\VisiteurType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Visiteur;
use App\Entity\Fraisforfait;
use App\Entity\Lignefraisforfait;
use App\Entity\Lignefraishorsforfait;
use App\Repository\VisiteurRepository;
use App\Repository\FichefraisRepository;
use App\Repository\FraisforfaitRepository;
use App\Repository\LignefraisforfaitRepository;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Form\FormTypeInterface;


class VisiteurController extends AbstractController
{
    public function visiteur()
    {
        return $this->render('visiteur/visiteur.html.twig', [
            'controller_name' => 'VisiteurController',
        ]);
    }

    public function CompteVisiteur()
    {
        return $this->render('visiteur/visiteur.html.twig', [
            'controller_name' => 'VisiteurController',
        ]);
    }
    
    public function seConnecterVisiteur(Request $request)
    {
        

        $form = $this->createFormBuilder(array('allow_extra_field' => true))
                ->add('identifiant',TextType::class, array('label' => 'Login : ',
                                                            'attr'=> array('class' => 'form-control','placeholder' =>'Login...')))
                ->add('motDePasse',PasswordType::class, array('label' => 'Mot de Passe : ',
                                                                'attr'=> array('class' => 'form-control','placeholder' =>'****')))
                ->add('valider',SubmitType::class, array('label' => 'Valider',
                                                        'attr'=> array('class' => 'btn btn-primary btn-block')))
                ->add('annuler',ResetType::class, array('label' => 'Quitter',
                                                        'attr'=> array('class' => 'btn btn-danger btn-block')))
                ->getForm();

        
        $request = Request::createFromGlobals();
        $form->handleRequest($request);

        

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
                
            $identifiant = $form['identifiant']->getData();
            $motDePasse = $form['motDePasse']->getData();
            $visiteur = new Visiteur();
            $visiteur = $em->getRepository(Visiteur::class)->seConnecterVisiteur($identifiant,$motDePasse);
            

            if($visiteur != null){
                $_SESSION = array();
                $session = new Session();
                $session->set('nom',$visiteur->getNom());
                $session->set('prenom',$visiteur->getPrenom());
                $session->set('id',$visiteur->getId());
                    
                $_SESSION['visiteur'] = $visiteur;

                $idVis = $session->get('id');
                $month = date('m');
                $year = date("Y");
                $date = sprintf("%02d%04d", $month, $year);

                $ficheFrais = $em-> getRepository(Fichefrais::class)->getUneFicheFrais($idVis, $date);
                $fraisForfait = $em->getRepository(Fraisforfait::class)-> getLesFraisForfait();

                if($ficheFrais===null){
                    $ficheFraisCreer = new Fichefrais();

                    $etat = $em->getRepository(Etat::class)->find("CR");
                        
                    $ficheFraisCreer->setIdVisiteur($idVis);
                    $ficheFraisCreer->setMois($date);
                    $ficheFraisCreer->setNbJustificatifs(0);
                    $ficheFraisCreer->setMontant(0);
                    $ficheFraisCreer->setIdEtat($etat[0]);

                    if(!$em->contains($ficheFraisCreer)){
                        foreach($ficheFrais  as $uneFicheFrais){
                            $ligneFraisForfait = new LigneFraisForfait();

                            $ligneFraisForfait->setIdFicheFrais($ficheFraisCreer);
                            $ligneFraisForfait->setIdFraisForfait($ficheFraisCreer);
                            $ligneFraisForfait->setIdVisiteur($idVis);
                            $ligneFraisForfait->setMois($date);
                            $ligneFraisForfait->setQuantite(0);

                            $em->persist($ligneFraisForfait);
                        }
                        $em->persist($ficheFraisCreer);
                        $em->flush();

                    }
                             
                    return $this->redirect('compte');
                }
            }
            else{
                return $this->render('visiteur/seConnecterVisiteur.html.twig', array(
                    'form'=>$form->createView(),
                    'erreur'=> 'false'
                ));
            }
        }
        else{
            return $this->render('visiteur/seConnecterVisiteur.html.twig',array('form'=>$form->createView()));
        }
    }

    public function seDeconnecter(Request $request)
    {
        $session = $request->getSession();
        $session -> clear();
        return $this->render('/');
    }


    public function saisir(Request $request)
    {
        $session = $request->getSession();
        $id = $session->get('id');

        $em = $this->getDoctrine()->getManager();

        $month = date("m");
        $year = date("Y");
        $date = sprintf("%02d%04d");
        dump($date);

        $ficheFrais = $em->getRepository(Fichefrais::class)->getFicheFrais($id,$date);

        dump($ficheFrais);

        $ligneFraisForfait = $em->getRepository(LigneFraisForfait::class)->getFraisForfaitMois($ficheFrais);


        $formBuilder = $this->createFormBuilder(array('allow_extra_field' => true));

        foreach( $ligneFraisForfait as $laLigneFf ){
            $idFf = $laLigneFf->getIdFraisForfait()->getId();
            $nomFf = $laLigneFf->getIdFraisForfait()->getLibelle();
            $quantite = $laLigneFf->getQuantite();

            $formBuilder->add($idFf, TextType::class, array(
                                                            'label' => $nomFf,
                                                            'attr' => array('class' => 'form-control',
                                                                            'value' => $quantite,)
            ));
        }
        $formBuilder
        ->add('save', SubmitType::class, array(
                                                'label'=> 'Modifier' ,
                                                'attr' => array('class'=> 'btn btn-outline-primary',
                                                                'id' => 'btnSave')))
        ->add('cancel', ResetType::class, array('label'=> 'Annuler' ,
                                                'attr' => array('class'=> 'btn btn-outline-danger',
                                                                'id' => 'btnSave')));

        $form = $formBuilder->getForm();





        $request = Request::createFromGlobals();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $data = $form->getData();

            foreach ($ligneFraisForfait as $uneLigneFf){

                foreach ($data as $oneData){

                    if($uneLigneFf->getIdFraisForfait()->getId() == key ($data)){

                        $quantite = $oneData;
                        $uneLigneFf->setQuantite($quantite);

                    }

                }

            }

            $em->flush();


        }

        return $this->render(
            'visiteur/saisir.html.twig',
            array('form' => $form->createView())
        );
    }
}
 

          
