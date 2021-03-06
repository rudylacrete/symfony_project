<?php

namespace GithubProjectsBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * TagRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TagRepository extends EntityRepository
{
    public function getProjects($tag_id) {
        $q=$this->createQueryBuilder('p')
        ->join('p.tags', 't')
        ->where('t.id = :tag_id')
        ->setParameter('tag_id', $tag_id)
        ->getQuery()->getResult();

    return $q;
    }
}
