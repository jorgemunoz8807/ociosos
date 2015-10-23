<?php

namespace Ociosos\ComunBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Almacen
 *
 * @ORM\Table(name="almacen")
 * @ORM\Entity(repositoryClass="Ociosos\ComunBundle\Entity\AlmacenRepository")
 */
class Almacen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="AlmacenID", type="integer")
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
     * @ORM\Column(name="CodAlmacen", type="string", length=50)
     */
    protected $codAlmacen;


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
     * @return Almacen
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
     * Set codAlmacen
     *
     * @param string $codAlmacen
     * @return Almacen
     */
    public function setCodAlmacen($codAlmacen)
    {
        $this->codAlmacen = $codAlmacen;
    
        return $this;
    }

    /**
     * Get codAlmacen
     *
     * @return string 
     */
    public function getCodAlmacen()
    {
        return $this->codAlmacen;
    }
    
    public function __toString() {
        return $this->getNombre();
    }
}
