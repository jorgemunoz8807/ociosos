<?php

namespace Ociosos\ComunBundle\Entity;

use Doctrine\ORM\EntityRepository;

class ProductoRepository extends EntityRepository {

    public function findByTermino($wordSrch)
    {
        $em = $this->getEntityManager();
        $dql = 'SELECT pd
                FROM ComunBundle:Producto pd
                WHERE pd.nombre
                LIKE :ProductoNombre
                ORDER BY pd.nombre ASC';
        $consulta = $em->createQuery($dql);
        $consulta->setParameter("ProductoNombre", "%$wordSrch%");

        return $consulta->getResult();
    }

    public function findByConsultas($dql)
    {
        $em = $this->getEntityManager();
        $consulta = $em->createQuery($dql);

        return $consulta->getResult();
    }

    public function findAllOrderedByName()
    {
        $em = $this->getEntityManager();
        $dql = 'SELECT pd FROM ComunBundle:Producto pd ORDER BY pd.nombre ASC';
        $query = $em->createQuery($dql);
        return $query->getResult();
    }

    public function FindByEntityInitials($initials)
    {
        $em = $this->getEntityManager();
        $dql = 'SELECT COUNT(pd)
                FROM ComunBundle:Producto pd
                JOIN ComunBundle:Centro ce
                WHERE ce = pd.centro AND ce.siglas = :Initials';
        $query = $em->createQuery($dql);
        $query->setParameter('Initials', $initials);
        return $query->getResult();
    }

    public function DeleteByEntity($entity)
    {
        $em = $this->getEntityManager();
        $dql = 'DELETE ComunBundle:Producto pd WHERE pd.centro = :Entity';
        $query = $em->createQuery($dql);
        $query->setParameter('Entity', $entity);
        return $query->getResult();
    }



    public function FindEmailById($id)
    {

        $em= $this->getEntityManager();
        $query= $em->createQueryBuilder();
        $query ->select('cent.email')
               ->from('ComunBundle:Centro','cent')
               ->innerJoin('ComunBundle:Producto','prod','With','prod.centro=cent.id')
            ->where('prod.id=?1')
            ->setParameter(1,$id);



/*var_dump(sizeof($query->getQuery()->getArrayResult() );
        die;*/

        return $query->getQuery()->getSingleResult();
    }

}
