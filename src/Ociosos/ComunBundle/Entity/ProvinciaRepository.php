<?php

namespace Ociosos\ComunBundle\Entity;

use Doctrine\ORM\EntityRepository;

class ProvinciaRepository extends EntityRepository {

    public function findAllOrderedByName()
    {
        $em = $this->getEntityManager();
        $dql = 'SELECT pv FROM ComunBundle:Provincia pv ORDER BY pv.nombre ASC';
        $query = $em->createQuery($dql);
        return $query->getResult();
    }

    public function getResumeByState($state)
    {
        $em = $this->getEntityManager();

        $dql = 'SELECT  ce.siglas,
                        COUNT(prod.id) as TotalProd,
                        SUM(prod.precioMN) as ImportMN,
                        SUM(prod.precioMLC) as ImportMLC
                FROM ComunBundle:Producto prod
                JOIN prod.centro ce
                JOIN ce.municipio m
                WHERE m.provincia = :State';

        $query = $em->createQuery($dql);
        $query->setParameter("State", $state);

        return $query->getResult();
    }

    public function isUsedBy($provincia)
    {
        $em = $this->getEntityManager();
        $dql = 'SELECT DISTINCT m
                FROM ComunBundle:Municipio m
                WHERE m.provincia = :Provincia
                ORDER BY m.nombre ASC';
        $query = $em->createQuery($dql);
        $query->setParameter("Provincia", $provincia);

        return $query->getResult();
    }
}