<?php

namespace Ociosos\ComunBundle\Entity;

use Doctrine\ORM\EntityRepository;

class OrganizacionRepository extends EntityRepository {

    public function findAllOrderedByName()
    {
        $em = $this->getEntityManager();
        $dql = 'SELECT o FROM ComunBundle:Organizacion o ORDER BY o.nombre ASC';
        $query = $em->createQuery($dql);
        return $query->getResult();
    }
    public function findAllOrderedBySiglas()
    {
        $em = $this->getEntityManager();
        $dql = 'SELECT o FROM ComunBundle:Organizacion o ORDER BY o.siglas ASC';
        $query = $em->createQuery($dql);
        return $query->getResult();
    }

    public function getResumeByOrg($organization)
    {
        $em = $this->getEntityManager();

        $dql = 'SELECT  ce.siglas,
                        COUNT(prod.id) as TotalProd,
                        SUM(prod.precioMN) as ImportMN,
                        SUM(prod.precioMLC) as ImportMLC
                FROM ComunBundle:Producto prod
                JOIN prod.centro ce
                WHERE ce.organizacion = :Organization';

        $query = $em->createQuery($dql);
        $query->setParameter("Organization", $organization);

        return $query->getResult();
    }

    public function isUsedBy($organization)
    {
        $em = $this->getEntityManager();
        $dql = 'SELECT DISTINCT ce
                FROM ComunBundle:Centro ce
                WHERE ce.organizacion = :Organization
                ORDER BY ce.nombre ASC';
        $query = $em->createQuery($dql);
        $query->setParameter("Organization", $organization);

        return $query->getResult();
    }

}
