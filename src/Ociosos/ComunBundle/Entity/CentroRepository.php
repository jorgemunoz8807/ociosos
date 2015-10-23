<?php

namespace Ociosos\ComunBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NoResultException;
use Symfony\Component\Validator\Constraints\Country;

class CentroRepository extends EntityRepository {

    public function findAllOrderedByName()
    {
        $em = $this->getEntityManager();
        $dql = 'SELECT ce FROM ComunBundle:Centro ce ORDER BY ce.nombre ASC';
        $query = $em->createQuery($dql);
        return $query->getResult();
    }

    public function findAllOrderedBySiglas()
    {
        $em = $this->getEntityManager();
        $dql = 'SELECT ce FROM ComunBundle:Centro ce ORDER BY ce.siglas ASC';
        $query = $em->createQuery($dql);
        return $query->getResult();
    }

    public function GetCategoriaBySiglas($centroSiglas)
    {
        try
        {
            $em = $this->getEntityManager();

            $dql = 'SELECT ce FROM ComunBundle:Centro ce WHERE ce.siglas= :CentroSiglas';

            $query = $em->createQuery($dql);
            $query->setParameter("CentroSiglas", $centroSiglas);
            $query->setMaxResults(1);

            return $query->getSingleResult();
        }
        catch(NoResultException $nREx)
        {
            return false;
        }
    }

    public function GetEntityByUser($user)
    {
        try
        {
            $em = $this->getEntityManager();
            $dql = 'SELECT ce
                    FROM ComunBundle:Centro ce
                    JOIN UsuarioBundle:Usuario u
                    WHERE u = :Username';
            $query = $em->createQuery($dql);
            $query->setParameter("Username", $user);
            $query->setMaxResults(1);

            return $query->getSingleResult();
        }
        catch(NoResultException $nREx)
        {
            return false;
        }
    }

    public function GetEntityByInitials($initials)
    {
        try
        {
            $em = $this->getEntityManager();
            $dql = 'SELECT ce
                    FROM ComunBundle:Centro ce
                    WHERE ce.siglas = :Initials';
            $query = $em->createQuery($dql);
            $query->setParameter("Initials", $initials);
            $query->setMaxResults(1);
            return $query->getSingleResult();
        }
        catch(NoResultException $nREx)
        {
            return false;
        }
    }

    public function isUsedByUser($entity)
    {
        $em = $this->getEntityManager();
        $dql = 'SELECT DISTINCT u
                FROM UsuarioBundle:Usuario u
                WHERE u.centro = :Entity
                ORDER BY u.nombre ASC';
        $query = $em->createQuery($dql);
        $query->setParameter("Entity", $entity);

        return $query->getResult();
    }

    public function isUsedByProduct($entity)
    {
        $em = $this->getEntityManager();
        $dql = 'SELECT DISTINCT pd
                FROM ComunBundle:Producto pd
                WHERE pd.centro = :Entity
                ORDER BY pd.nombre ASC';
        $query = $em->createQuery($dql);
        $query->setParameter("Entity", $entity);

        return $query->getResult();
    }
}
