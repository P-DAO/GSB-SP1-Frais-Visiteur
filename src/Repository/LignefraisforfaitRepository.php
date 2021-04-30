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
        $queryBuilder = $this->_em->createQueryBuilder()
            ->select('l')
            ->from(LigneFraisForfait::class, 'l')
            ->where('l.idVisiteur = :id')
            ->andWhere('l.mois = :mois')
            ->setParameter('id',$idVisiteur)
            ->setParameter('mois',$date)
            ->getQuery()
            ->getResult();
           
        return $queryBuilder;
    }


}
