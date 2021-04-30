<?php

namespace App\Repository;

use App\Entity\Fichefrais;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Fichefrais|null find($id, $lockMode = null, $lockVersion = null)
 * @method Fichefrais|null findOneBy(array $criteria, array $orderBy = null)
 * @method Fichefrais[]    findAll()
 * @method Fichefrais[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FichefraisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Fichefrais::class);
    }

    // /**
    //  * @return Fichefrais[] Returns an array of Fichefrais objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Fichefrais
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function getUneFicheFrais($idVisiteur,$date) //fonction pour afficher la fiche de l'historique
    {
        return $this->createQueryBuilder( 'ff' )
                                ->join( 'ff.idetat', 'e')
                                ->addSelect('e')
                                ->where('ff.idvisiteur = :idVisiteur')
                                ->andWhere( 'ff.mois = :mois')
                                //Passage des parametres
                                ->setParameter( 'idVisiteur', $idVisiteur)
                                ->setParameter( 'mois', $date)
                                ->getQuery()
                                ->getResult();
    }

    public function getUneFicheFraisExiste($idVisiteur,$date) //fonction pour afficher la fiche de l'historique
    {
        try{
            $queryBuilder = $this->createQueryBuilder( 'ff' )
                                ->join( 'ff.idetat', 'e')
                                ->addSelect('e')
                                ->where('ff.idvisiteur = :idVisiteur')
                                ->andWhere( 'ff.mois = :mois')
                                ->setParameter( 'idVisiteur', $idVisiteur)
                                ->setParameter( 'mois', $date)
                                ->getQuery()
                                ->getOneorNullResult();
        } catch(NonUniqueResultException $e){
            dump($e->getMessage());
            return null;
        }
        return $queryBuilder;
       
         
    }

    public function getFichesFrais($idVisiteur) 
    {
        return $this->createQueryBuilder('ff')
                    ->join('ff.idetat', 'e')
                    ->addSelect('e')
                    ->where('ff.idvisiteur = :idVisiteur')
                    ->setParameter('idVisiteur', $idVisiteur)
                    ->orderBy('ff.mois')
                    ->getQuery()
                    ->getResult();
    }

    

}
