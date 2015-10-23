<?php

namespace Ociosos\ComunBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NoResultException;

class CategoriaRepository extends EntityRepository {

    public function findAllOrderedByName()
    {
        $em = $this->getEntityManager();
        $dql = 'SELECT ca FROM ComunBundle:Categoria ca ORDER BY ca.nombre ASC';
        $query = $em->createQuery($dql);
        return $query->getResult();
    }


    public function GetCategoriaByName($catName)
    {
        try
        {
            $em = $this->getEntityManager();

            $dql = 'SELECT ca FROM ComunBundle:Categoria ca WHERE ca.nombre = :CatName';

            $query = $em->createQuery($dql);
            $query->setParameter("CatName", $catName);
            $query->setMaxResults(1);

            return $query->getSingleResult();
        }
        catch(NoResultException $nREx)
        {
            return false;
        }
    }

    public function getResumeByCategory()
    {
        $em = $this->getEntityManager();

        $dql = 'SELECT  ca.nombre,
                        COUNT(prod.id) as TotalProd,
                        SUM(prod.precioMN) as ImportMN,
                        SUM(prod.precioMLC) as ImportMLC
                FROM ComunBundle:Producto prod
                JOIN prod.categoria ca
                GROUP BY ca.nombre';

        $query = $em->createQuery($dql);

        return $query->getResult();
    }

    public function isUsedBy($category)
    {
        $em = $this->getEntityManager();
        $dql = 'SELECT DISTINCT pd
                FROM ComunBundle:Producto pd
                WHERE pd.categoria = :Category
                ORDER BY pd.nombre ASC';
        $query = $em->createQuery($dql);
        $query->setParameter("Category", $category);

        return $query->getResult();
    }
}
