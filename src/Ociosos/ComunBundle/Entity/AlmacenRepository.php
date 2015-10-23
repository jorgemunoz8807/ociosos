<?php

namespace Ociosos\ComunBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NoResultException;

class AlmacenRepository extends EntityRepository
{
    public function findAllOrderedByName()
    {
        $em = $this->getEntityManager();
        $dql = 'SELECT a FROM ComunBundle:Almacen a ORDER BY a.nombre ASC';
        $query = $em->createQuery($dql);
        return $query->getResult();
    }

    public function GetAlmacen($idAlmacen)
    {
        $em = $this->getEntityManager();
        
        $dql = 'SELECT a FROM ComunBundle:Almacen a WHERE a.id = :AlmacenID';
        
        $consulta = $em->createQuery($dql);
        $consulta->setParameter("AlmacenID", $idAlmacen);
        $consulta->setMaxResults(1);
        
        return $consulta->getSingleResult();
    }

    public function GetAlmacenByCode($almacenCod)
    {
        try
        {
            $em = $this->getEntityManager();

            $dql = 'SELECT a FROM ComunBundle:Almacen a WHERE a.codAlmacen = :AlmacenCod';

            $query = $em->createQuery($dql);
            $query->setParameter("AlmacenCod", $almacenCod);
            $query->setMaxResults(1);
            return $query->getSingleResult();
        }
        catch(NoResultException $nREx)
        {
            return false;
        }
    }
}
