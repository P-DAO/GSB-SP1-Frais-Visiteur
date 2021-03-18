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
    
    public function getFraisForfaitDuMois($idFicheFrais)
    {
        return $this->createQueryBuilder('lff')
                    ->join('lff.idFicheFrais', 'ff', 'WITH', 'ff.id = :idFiche')
                    ->join('lff.idFraisForfait', 'ffo')
                    ->addSelect('ff')
                    ->addSelect('ffo')
                    ->setParameter('idFiche', $idFicheFrais )
                    ->getQuery()
                    ->getResult();
    }
}
