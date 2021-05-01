<?php

namespace App\Repository;

use App\Entity\LigneFraisForfait;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LigneFraisForfait|null find($id, $lockMode = null, $lockVersion = null)
 * @method LigneFraisForfait|null findOneBy(array $criteria, array $orderBy = null)
 * @method LigneFraisForfait[]    findAll()
 * @method LigneFraisForfait[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LignefraisforfaitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LigneFraisForfait::class);
    }
    
    public function getFraisForfaitDuMois($idVisiteur, $date)
    {
        /*$queryBuilder = $this->createQueryBuilder('lff')
            //->select('l')
            //->from(LigneFraisForfait::class, 'lff')
            ->join('lff.idVisiteur', 'ff', 'WITH', 'ff.idVisiteur'  :idVis)
            ->where('lff.idVisiteur = :idVisiteur')
            ->andWhere('lff.mois = :mois')
            ->setParameter('idVisiteur',$idVisiteur)
            ->setParameter('mois',$date)
            ->getQuery()
            ->getResult();
           
        return $queryBuilder;
        /*select 
    -> from LigneFraisForfait lff
    -> inner join FicheFrais ff
    -> on lff.idVisiteur = ff.idVisiteur
    -> and lff.mois=ff.mois
    -> where lff.mois = "042021";
*/ 
    }


}
