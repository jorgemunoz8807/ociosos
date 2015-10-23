<?php

namespace Ociosos\ComunBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Organizacion
 *
 * @ORM\Table(name="organizacion")
 * @ORM\Entity(repositoryClass="Ociosos\ComunBundle\Entity\OrganizacionRepository")
 */
class Organizacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="OrganizacionID", type="integer")
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
     * @return Organizacion
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
    
    public function __toString() {
        return $this->getNombre();
    }
}
