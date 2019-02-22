<?php

namespace App\Repository;

use App\Entity\CoverLetterTemplate;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CoverLetterTemplate|null find($id, $lockMode = null, $lockVersion = null)
 * @method CoverLetterTemplate|null findOneBy(array $criteria, array $orderBy = null)
 * @method CoverLetterTemplate[]    findAll()
 * @method CoverLetterTemplate[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CoverLetterTemplateRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CoverLetterTemplate::class);
    }

    // /**
    //  * @return CoverLetterTemplate[] Returns an array of CoverLetterTemplate objects
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
    public function findOneBySomeField($value): ?CoverLetterTemplate
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
