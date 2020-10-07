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
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\HttpFoundation\Request;


class VisiteurController extends AbstractController
{
    public function visiteur()
    {
        return $this->render('visiteur/visiteur.html.twig', [
            'controller_name' => 'VisiteurController',
        ]);
    }
    
    public function seConnecterVisiteur(Request $test_session)
    {
        
        $request = Request::createFromGlobals() ;
                
        $form = $this->createFormBuilder(  )
            ->add( 'identifiant' , TextType::class )
            ->add( 'motDePasse' , PasswordType::class )
            ->add( 'valider' , SubmitType::class )
            ->add( 'annuler' , ResetType::class )
            ->getForm() ;
            
        $form->handleRequest( $request ) ;
        
        if ( $form->isSubmitted() && $form->isValid() ) {
            $data = $form->getData() ;
            
                array( 'data' => $data ) ;
                $pdo = new \PDO('mysql:host=localhost; dbname=gsbFrais', 'developpeur', 'azerty');
                
                $rqt = $pdo->prepare("select * from Visiteur where login = :identifiant") ;
                $rqt->bindParam(':identifiant', $data['identifiant']);
                $rqt->execute() ;
                $resultat1 = $rqt->fetch(\PDO::FETCH_ASSOC) ;
                
                $sql = $pdo->prepare("select * from Visiteur where mdp = :motDePasse") ;
                $sql->bindParam(':motDePasse', $data['motDePasse']);
                $sql->execute() ;
                $resultat2 = $sql->fetch(\PDO::FETCH_ASSOC) ;
                
                if ( $resultat1['login'] == $data['identifiant'] && $resultat2['mdp'] == $data['motDePasse'] ) {


                    $session = $test_session->getSession() ;
                    $session->set('id',$resultat1['id']) ;

                    return $this->redirectToRoute( 'menuV', array( 'data' => $data ) ) ;
                    }

                else{
                    return $this->redirectToRoute( 'visiteur/seConnecterVisiteur', array( 'data' => $data ) ) ;
                }
    
        }		
        return $this->render( 'visiteur/seConnecterVisiteur.html.twig', array( 'formulaire' => $form->createView() ) ) ;
        
    }  

}