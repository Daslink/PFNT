<?php

namespace App\Repository;

use App\Entity\Periodos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Periodos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Periodos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Periodos[]    findAll()
 * @method Periodos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PeriodosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Periodos::class);
    }

    // /**
    //  * @return Periodos[] Returns an array of Periodos objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Periodos
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
