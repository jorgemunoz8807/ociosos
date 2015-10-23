<?php

namespace Ociosos\UsuarioBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NoResultException;



class UsuarioRepository extends EntityRepository implements UserProviderInterface {
    //put your code here
    /**
     * Loads the user for the given username.
     *
     * This method must throw UsernameNotFoundException if the user is not
     * found.
     *
     * @param string $username The username
     *
     * @return UserInterface
     *
     * @see UsernameNotFoundException
     *
     * @throws UsernameNotFoundException if the user is not found
     *
     */
    public function loadUserByUsername($username)
    {
        // TODO: Implement loadUserByUsername() method.
        return $this->getEntityManager()
            ->createQuery('SELECT u FROM UsuarioBundle:Usuario u WHERE u.username = :Username')
            ->setParameters(array(
                'Username' => $username
            ))
            ->getOneOrNullResult();
    }

    /**
     * Refreshes the user for the account interface.
     *
     * It is up to the implementation to decide if the user data should be
     * totally reloaded (e.g. from the database), or if the UserInterface
     * object can just be merged into some internal array of users / identity
     * map.
     * @param UserInterface $user
     *
     * @return UserInterface
     *
     * @throws UnsupportedUserException if the account is not supported
     */
    public function refreshUser(UserInterface $user)
    {
        // TODO: Implement refreshUser() method.
        return $this->loadUserByUsername($user->getUsername());
    }

    /**
     * Whether this provider supports the given user class
     *
     * @param string $class
     *
     * @return Boolean
     */
    public function supportsClass($class)
    {
        // TODO: Implement supportsClass() method.
        return $class === 'Ociosos\UsuarioBundle\Entity\Usuario';
    }

    public function findAllOrderedByName()
    {
        $em = $this->getEntityManager();
        $dql = 'SELECT u FROM UsuarioBundle:Usuario u ORDER BY u.nombre ASC';
        $query = $em->createQuery($dql);
        return $query->getResult();
    }


    public function FindEmailFromAdmin()
    {

        $em= $this->getEntityManager();
        $query= $em->createQueryBuilder();
        $query ->select('usuario.email')
            ->from('UsuarioBundle:Usuario','usuario')
//            ->innerJoin('ComunBundle:Producto','prod','With','prod.centro=cent.id')
            ->where('usuario.role=?1')
            ->setParameter(1,"ROLE_ADMIN");
        /*var_dump(sizeof($query->getQuery()->getArrayResult() );
                die;*/

//        Ver si es un solo administrador o existen varios
        return $query->getQuery()->getSingleResult();

    }



}
