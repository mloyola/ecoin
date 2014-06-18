<?php

namespace Wayci\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipocta
 */
class Tipocta
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @ORM\ManyToMany(targetEntity="Wayci\BackendBundle\Entity\Pais", inversedBy="tipocuentas")
     * @ORM\JoinTable(name="tipocuentas_paises")
     */
    private $paises;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->paises = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    public function __toString()
    {
        return $this->getNombre();
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
     * @return Tipocta
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
     * Add paises
     *
     * @param \Wayci\BackendBundle\Entity\Pais $paises
     * @return Tipocta
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