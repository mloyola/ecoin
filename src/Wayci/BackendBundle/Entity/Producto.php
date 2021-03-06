<?php

namespace Wayci\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producto
 */
class Producto
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $identificador;

    /**
     * @var string
     */
    private $descripcion;

    /**
    * @ORM\ManyToOne(targetEntity="Wayci\BackendBundle\Entity\Tipoprod", inversedBy="productos")
    * @ORM\JoinColumn(name="tipoprod_id", referencedColumnName="id")
    */
    protected $tipoprod; 

    /**
     * @ORM\ManyToMany(targetEntity="Wayci\BackendBundle\Entity\Pais", inversedBy="productos")
     * @ORM\JoinTable(name="productos_paises")
     */
    private $paises;

    /**
     * @ORM\OneToMany(targetEntity="Wayci\BackendBundle\Entity\Procesador", mappedBy="productos")
    */
    private $procesadores;

    /**
     * @ORM\Column(type="boolean")     
     */
    protected $estado;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->procesadores = new \Doctrine\Common\Collections\ArrayCollection();
        $this->paises = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
     public function __toString()
    {
        return $this->getDescripcion();
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
     * Set identificador
     *
     * @param string $identificador
     * @return Producto
     */
    public function setIdentificador($identificador)
    {
        $this->identificador = $identificador;
    
        return $this;
    }

    /**
     * Get identificador
     *
     * @return string 
     */
    public function getIdentificador()
    {
        return $this->identificador;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Producto
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set estado
     *
     * @param boolean $estado
     * @return Producto
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return boolean 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Add procesadores
     *
     * @param \Wayci\BackendBundle\Entity\Procesador $procesadores
     * @return Producto
     */
    public function addProcesadore(\Wayci\BackendBundle\Entity\Procesador $procesadores)
    {
        $this->procesadores[] = $procesadores;
    
        return $this;
    }

    /**
     * Remove procesadores
     *
     * @param \Wayci\BackendBundle\Entity\Procesador $procesadores
     */
    public function removeProcesadore(\Wayci\BackendBundle\Entity\Procesador $procesadores)
    {
        $this->procesadores->removeElement($procesadores);
    }

    /**
     * Get procesadores
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProcesadores()
    {
        return $this->procesadores;
    }

    /**
     * Set tipoprod
     *
     * @param \Wayci\BackendBundle\Entity\Tipoprod $tipoprod
     * @return Producto
     */
    public function setTipoprod(\Wayci\BackendBundle\Entity\Tipoprod $tipoprod = null)
    {
        $this->tipoprod = $tipoprod;
    
        return $this;
    }

    /**
     * Get tipoprod
     *
     * @return \Wayci\BackendBundle\Entity\Tipoprod 
     */
    public function getTipoprod()
    {
        return $this->tipoprod;
    }

    /**
     * Add paises
     *
     * @param \Wayci\BackendBundle\Entity\Pais $paises
     * @return Producto
     */
    public function addPaise(\Wayci\BackendBundle\Entity\Pais $paises)
    {
        $this->paises[] = $paises;
    
        return $this;
    }

    /**
     * Remove paises
     *
     * @param \Wayci\BackendBundle\Entity\Pais $paises
     */
    public function removePaise(\Wayci\BackendBundle\Entity\Pais $paises)
    {
        $this->paises->removeElement($paises);
    }

    /**
     * Get paises
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPaises()
    {
        return $this->paises;
    }
}