<?php

namespace App\Repository;

use App\Entity\LinhasCarrinho;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LinhasCarrinho|null find($id, $lockMode = null, $lockVersion = null)
 * @method LinhasCarrinho|null findOneBy(array $criteria, array $orderBy = null)
 * @method LinhasCarrinho[]    findAll()
 * @method LinhasCarrinho[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LinhasCarrinhoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LinhasCarrinho::class);
    }

    // /**
    //  * @return LinhasCarrinho[] Returns an array of LinhasCarrinho objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LinhasCarrinho
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
