<?php

namespace App\Repository;


use App\Entity\Mmatch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Mmatch>
 *
 * @method Mmatch|null find($id, $lockMode = null, $lockVersion = null)
 * @method Mmatch|null findOneBy(array $criteria, array $orderBy = null)
 * @method Mmatch[]    findAll()
 * @method Mmatch[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MmatchRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Mmatch::class);
    }

    public function save(Mmatch $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Mmatch $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }


}
