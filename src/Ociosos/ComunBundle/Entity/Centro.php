<?php

namespace Ociosos\ComunBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Centro
 *
 * @ORM\Table(name="centro")
 * @ORM\Entity(repositoryClass="Ociosos\ComunBundle\Entity\CentroRepository")
 */
class Centro
{
    /**
     * @var integer
     *
     * @ORM\Column(name="CentroID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=100)
     */
    protected $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Siglas", type="string", length=50)
     */
    protected $siglas;

    /**
     * @var string
     *
     * @ORM\Column(name="Direccion", type="string", length=255)
     */
    protected $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono", type="string", length=50)
     */
    protected $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=50)
     */
    protected $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Director", type="string", length=50)
     */
    protected $director;

    /**
     * @var string
     *
     * @ORM\Column(name="REEUP", type="string", length=50)
     */
    protected $rEEUP;
    
    /**     
     * @ORM\ManyToOne(targetEntity="Ociosos\ComunBundle\Entity\Organizacion")
     * @ORM\JoinColumn(name="Organizacion_organizacionID", referencedColumnName="OrganizacionID")
     */
    protected $organizacion;
    
    /**     
     * @ORM\ManyToOne(targetEntity="Ociosos\ComunBundle\Entity\Municipio")
     * @ORM\JoinColumn(name="Municipio_municipioID", referencedColumnName="MunicipioID")
     */
    protected $municipio;
    
    

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
     * @return Centro
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
     * Set siglas
     *
     * @param string $siglas
     * @return Centro
     */
    public function setSiglas($siglas)
    {
        $this->siglas = $siglas;
    
        return $this;
    }

    /**
     * Get siglas
     *
     * @return string 
     */
    public function getSiglas()
    {
        return $this->siglas;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Centro
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    
        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Centro
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    
        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Centro
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
     * Set director
     *
     * @param string $director
     * @return Centro
     */
    public function setDirector($director)
    {
        $this->director = $director;
    
        return $this;
    }

    /**
     * Get director
     *
     * @return string 
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * Set rEEUP
     *
     * @param string $rEEUP
     * @return Centro
     */
    public function setREEUP($rEEUP)
    {
        $this->rEEUP = $rEEUP;
    
        return $this;
    }

    /**
     * Get rEEUP
     *
     * @return string 
     */
    public function getREEUP()
    {
        return $this->rEEUP;
    }
    
    public function setOrganizacion(Organizacion $organizacion)
    {
        $this->organizacion = $organizacion;
    }
    
    public function getOrganizacion()
    {
        return $this->organizacion;
    }
    public function setMunicipio(Municipio $municipio)
    {
        $this->municipio = $municipio;
    }
    
    public function getMunicipio()
    {
        return $this->municipio;
    }
    
    public function __toString() {
        return $this->getNombre();
    }
}
