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
    
    public function seConnecterVisiteur(Request $request)
    {
        

        $form = $this->createFormBuilder(array('allow_extra_field' => true))
                ->add('identifiant',TextType::class, array('label' => 'Login : ','attr'=> array('class' => 'form-control','placeholder' =>'Login...')))
                ->add('motDePasse',PasswordType::class, array('label' => 'Mot de Passe : ','attr'=> array('class' => 'form-control','placeholder' =>'****')))
                ->add('valider',SubmitType::class, array('label' => 'Valider','attr'=> array('class' => 'btn btn-primary btn-block')))
                ->add('annuler',ResetType::class, array('label' => 'Quitter','attr'=> array('class' => 'btn btn-danger btn-block')))
                ->getForm();

        $visiteur = new Visiteur();
        $request = Request::createFromGlobals();
        $form->handleRequest($request);

        

        if ($form->isSubmitted() && $form->isValid()) {
                
            $identifiant = $form['identifiant']->getData();
            $motDePasse = $form['motDePasse']->getData();
            $lesVisiteurs = new Visiteur();
            $lesVisiteurs = $this->getDoctrine()->getRepository(Visiteur::class)->seConnecterVisiteur($identifiant,$motDePasse);
            

            if($lesVisiteurs != null){
                    $_SESSION = array();
                    $session = new Session();
                    $session->set('nom',$lesVisiteurs->getNom());
                    $session->set('prenom',$lesVisiteurs->getPrenom());
                    $session->set('id',$lesVisiteurs->getId());
                    
                    $_SESSION['visiteur'] = $lesVisiteurs;
                  
                    return $this->redirect('CompteVisiteur');
            }
        }
        return $this->render('visiteur/seConnecterVisiteur.html.twig',array('form'=>$form->createView()));
    }  

    public function CompteVisiteur()
    {
        return $this->render('visiteur/visiteur.html.twig', [
            'controller_name' => 'VisiteurController',
        ]);
    }


    
}

    
