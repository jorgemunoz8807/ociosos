<?php

namespace Ociosos\ComunBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Productos
 *
 * @ORM\Table(name="producto")
 * @ORM\Entity(repositoryClass="Ociosos\ComunBundle\Entity\ProductoRepository")
 */
class Producto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ProductoID", type="integer")
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
     * @ORM\Column(name="Codigo", type="string", length=50)
     */
    protected $codigo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaExportacion", type="datetime")
     */
    protected $fechaExportacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Estado", type="string", length=15)
     */
    protected $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="UM", type="string", length=5)
     */
    protected $uM;

    /**
     * @var float
     *
     * @ORM\Column(name="Cantidad", type="decimal")
     */
    protected $cantidad;

    /**
     * @var float
     *
     * @ORM\Column(name="PrecioMN", type="decimal")
     */
    protected $precioMN;

    /**
     * @var float
     *
     * @ORM\Column(name="PrecioMLC", type="decimal")
     */
    protected $precioMLC;
    
    /**     
     * @ORM\ManyToOne(targetEntity="Ociosos\ComunBundle\Entity\Almacen")
     * @ORM\JoinColumn(name="Almacen_almacenID", referencedColumnName="AlmacenID")
     */
    protected $almacen;

    /**
     * @ORM\ManyToOne(targetEntity="Ociosos\ComunBundle\Entity\Categoria")
     * @ORM\JoinColumn(name="Categoria_categoriaID", referencedColumnName="CategoriaID")
     */
    protected $categoria;
    
    /**     
     * @ORM\ManyToOne(targetEntity="Ociosos\ComunBundle\Entity\Centro")
     * @ORM\JoinColumn(name="Centro_centroID", referencedColumnName="CentroID")
     */
    protected $centro;


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
     * @return Productos
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
     * Set codigo
     *
     * @param string $codigo
     * @return Productos
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    
        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set fechaExportacion
     *
     * @param \DateTime $fechaExportacion
     * @return Productos
     */
    public function setFechaExportacion(\DateTime $fechaExportacion)
    {
        $this->fechaExportacion = $fechaExportacion;
    
        return $this;
    }

    /**
     * Get fechaExportacion
     *
     * @return \DateTime 
     */
    public function getFechaExportacion()
    {
        return $this->fechaExportacion;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Productos
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set uM
     *
     * @param string $uM
     * @return Productos
     */
    public function setUM($uM)
    {
        $this->uM = $uM;
    
        return $this;
    }

    /**
     * Get uM
     *
     * @return string 
     */
    public function getUM()
    {
        return $this->uM;
    }

    /**
     * Set cantidad
     *
     * @param float $cantidad
     * @return Productos
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    
        return $this;
    }

    /**
     * Get cantidad
     *
     * @return float 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set precioMN
     *
     * @param float $precioMN
     * @return Productos
     */
    public function setPrecioMN($precioMN)
    {
        $this->precioMN = $precioMN;
    
        return $this;
    }

    /**
     * Get precioMN
     *
     * @return float 
     */
    public function getPrecioMN()
    {
        return $this->precioMN;
    }

    /**
     * Set precioMLC
     *
     * @param float $precioMLC
     * @return Productos
     */
    public function setPrecioMLC($precioMLC)
    {
        $this->precioMLC = $precioMLC;
    
        return $this;
    }

    /**
     * Get precioMLC
     *
     * @return float 
     */
    public function getPrecioMLC()
    {
        return $this->precioMLC;
    }
    
    public function setAlmacen(Almacen $almacen)
    {
        $this->almacen= $almacen;
    }
    
    public function getAlmacen()
    {
        return $this->almacen;
    }
    public function setCategoria(Categoria $categoria)
    {
        $this->categoria = $categoria;
    }
    
    public function getCategoria()
    {
        return $this->categoria;
    }
    public function setCentro(Centro $centro)
    {
        $this->centro = $centro;
    }
    
    public function getCentro()
    {
        return $this->centro;
    }


    public function __toString() {
        return $this->getNombre();
    }
}
