<?php

namespace KejawenLab\Application\SemartHris\Repository;

use KejawenLab\Application\SemartHris\Component\Attendance\Model\ShiftmentInterface;
use KejawenLab\Application\SemartHris\Component\Attendance\Repository\ShiftmentRepositoryInterface;

/**
 * @author Muhamad Surya Iksanudin <surya.iksanudin@kejawenlab.com>
 */
class ShiftmentRepository extends Repository implements ShiftmentRepositoryInterface
{
    /**
     * @return ShiftmentInterface[]
     */
    public function findAll(): array
    {
        $queryBuilder = $this->entityManager->createQueryBuilder();
        $queryBuilder->select('entity.id, entity. code, entity.name');
        $queryBuilder->from($this->entityClass, 'entity');

        return $queryBuilder->getQuery()->getResult();
    }
}
