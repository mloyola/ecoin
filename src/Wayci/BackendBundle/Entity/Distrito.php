<?php

namespace Wayci\BackendBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Distrito
 */
class Distrito
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     * @Assert\NotBlank(message="Ingrese el nombre")  
     */
    private $nombre;

    /**
     * @ORM\ManyToOne(targetEntity="Wayci\BackendBundle\Entity\Ciudad",inversedBy="distritos")
     * @ORM\JoinColumn(name="ciudad_id", referencedColumnName="id")
     * @Assert\Type("Wayci\BackendBundle\Entity\Ciudad")
     * @Assert\NotBlank(message="Seleccione la ciudad")  
    */
    public $ciudad;    

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
     * @return Distrito
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
     * Set ciudad
     *
     * @param \Wayci\BackendBundle\Entity\Ciudad $ciudad
     * @return Distrito
     */
    public function setCiudad(\Wayci\BackendBundle\Entity\Ciudad $ciudad = null)
    {
        $this->ciudad = $ciudad;
    
        return $this;
    }

    /**
     * Get ciudad
     *
     * @return \Wayci\BackendBundle\Entity\Ciudad 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }
}