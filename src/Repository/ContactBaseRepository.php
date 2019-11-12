<?php

namespace App\Repository;

use App\Entity\ContactBase;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ContactBase|null find($id, $lockMode = null, $lockVersion = null)
 * @method ContactBase|null findOneBy(array $criteria, array $orderBy = null)
 * @method ContactBase[]    findAll()
 * @method ContactBase[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContactBaseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ContactBase::class);
    }

    // /**
    //  * @return ContactBase[] Returns an array of ContactBase objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ContactBase
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
