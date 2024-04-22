<?php

namespace App\Repository;

use App\Entity\Seguro;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Seguro>
 *
 * @method Seguro|null find($id, $lockMode = null, $lockVersion = null)
 * @method Seguro|null findOneBy(array $criteria, array $orderBy = null)
 * @method Seguro[]    findAll()
 * @method Seguro[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SeguroRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Seguro::class);
    }

    //    /**
    //     * @return Seguro[] Returns an array of Seguro objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('s.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Seguro
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
