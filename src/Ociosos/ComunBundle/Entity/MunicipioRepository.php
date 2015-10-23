<?php

namespace Ociosos\ComunBundle\Entity;

use Doctrine\ORM\EntityRepository;

class MunicipioRepository extends EntityRepository {

    public function findAllOrderedByName()
    {
        $em = $this->getEntityManager();
        $dql = 'SELECT m FROM ComunBundle:Municipio m ORDER BY m.nombre ASC';
        $query = $em->createQuery($dql);
        return $query->getResult();
    }

    public function isUsedBy($city)
    {
        $em = $this->getEntityManager();
        $dql = 'SELECT DISTINCT ce
                FROM ComunBundle:Centro ce
                WHERE ce.municipio = :Municipio
                ORDER BY ce.nombre ASC';
        $query = $em->createQuery($dql);
        $query->setParameter("Municipio", $city);

        return $query->getResult();
    }
}