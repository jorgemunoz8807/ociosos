<?php

namespace Ociosos\UsuarioBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;
use Ociosos\ComunBundle\Entity\Centro;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity(repositoryClass="Ociosos\UsuarioBundle\Entity\UsuarioRepository")
 * 
 */
class Usuario implements UserInterface
{
    /**
     * @var integer
     *
     * @ORM\Column(name="UsuarioID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=50)
     */
    protected $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Apellidos", type="string", length=50)
     */
    protected $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=50)
     */
    protected $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=200)
     */
    protected $password;

    /**
     * @var string
     *
     * @ORM\Column(name="Role", type="string", length=50)
     */
    protected $role;

    /**
     * @var string
     *
     * @ORM\Column(name="Username", type="string", length=50)
     */
    protected $username;
    
    /**
     * @var string
     *
     * @ORM\Column(name="Salt", type="string", length=255)
     */
    protected $salt;
    
    /**     
     * @ORM\ManyToOne(targetEntity="Ociosos\ComunBundle\Entity\Centro")
     * @ORM\JoinColumn(name="Centro_centroID", referencedColumnName="CentroID")
     */
    protected $centro;

    public function __construct()
    {
        
    }

        /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

        /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

        /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return   $this->salt;
//        return   null;
    }

    public function getRoles() {
        return array($this->role);
//        return array('ROLE_USER');
    }

    public function eraseCredentials()
    {
        return false;
    }

    public function equals(UserInterface $user)
    {
        return $this->getUsername() == $user->getUsername();        
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Usuario
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     * @return Usuario
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $pass
     * @return Usuario
     */
    public function setPassword($pass)
    {
        $this->password = $pass;
        return $this;
    }

    /**
     * Set role
     *
     * @param string $role
     * @return Usuario
     */
    public function setRole($role)
    {
        $this->role = $role;
    
        return $this;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set username
     *
     * @param string $login
     * @return Usuario
     */
    public function setUsername($login)
    {
        $this->username = $login;
        return $this;
    }
    
    /**
     * Set salt
     *
     * @param string $salt
     * @return Usuario
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;    
        return $this;
    }
    
    public function setCentro(Centro $centro)
    {
        $this->centro = $centro;
    }
    
    public function getCentro()
    {
        return $this->centro;
    }



    public function __toString(){return $this->nombre;}
}

