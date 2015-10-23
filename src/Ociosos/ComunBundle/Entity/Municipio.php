<?php

namespace Ociosos\ComunBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Municipio
 *
 * @ORM\Table(name="municipio")
 * @ORM\Entity(repositoryClass="Ociosos\ComunBundle\Entity\MunicipioRepository")
 */
class Municipio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="MunicipioID", type="integer")
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
     *
     * @ORM\ManyToOne(targetEntity="Ociosos\ComunBundle\Entity\Provincia")
     * @ORM\JoinColumn(name="Provincia_provinciaID", referencedColumnName="ProvinciaID")
     */
    protected $provincia;


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
     * @return Municipio
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
    
    public function setProvincia(Provincia $provincia)
    {
        $this->provincia = $provincia;
    }
    
    public function getProvincia()
    {
        return $this->provincia;
    }
    
    public function __toString() {
        return $this->getNombre();
    }
}
