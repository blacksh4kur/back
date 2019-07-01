<?php

namespace App\Repository;

use App\Entity\RoomPrivate;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method RoomPrivate|null find($id, $lockMode = null, $lockVersion = null)
 * @method RoomPrivate|null findOneBy(array $criteria, array $orderBy = null)
 * @method RoomPrivate[]    findAll()
 * @method RoomPrivate[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RoomPrivateRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, RoomPrivate::class);
    }

    // /**
    //  * @return RoomPrivate[] Returns an array of RoomPrivate objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RoomPrivate
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
