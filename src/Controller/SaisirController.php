<?php

namespace App\Controller;

use App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SaisirController extends AbstractController
{
    public function saisirFicheFrais()
    {
        $session = $request>getSession();
        $id = $session->$getId();

        $em = $this ->getDoctrine()->getManager();

        $mois = date("m");
        $annee = date("Y");
        $date = sprintf("%02d%4d", $mois, $annee);
        dump($date);

        $ficheFrias = $em->getRepository(FichefraisRepository::class)->getUneFicheFrais($id,$date);

        dump($ficheFrais);

        $lignesFraisForfait = $em->getRepository(LignefraisforfaitRepository::class)->getFraisForfaitDuMois($ficheFrais);

        foreach($lignesFraisForfait as $laLigneFF){
            $idFf = $laLigneFF->getIdFraisForfait()->getId();
            $nomFf =$laLigneFF->getIdFraisForfait()->getNom();
            $quantite = $laLigneFF->getIdFraisForfait()->getQuantite();
        }
        
        $formLigneFraisForfait=$this->createFormBuilder()
                                    ->add( '' );

        return $this->render('visiteur/show.html.twig',
                            array('form' => $formLigneFraisForfait)
                            )
    }


}