<?php

namespace Wayci\BackendBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Ciudad
 */
class Ciudad
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
     * @var \DateTime
     */
    private $fchCreate;

    /**
    * @ORM\ManyToOne(targetEntity="Wayci\BackendBundle\Entity\Pais", inversedBy="ciudades")
    * @ORM\JoinColumn(name="pais_id", referencedColumnName="id")
    */
    protected $pais;     

    /**
     * @ORM\OneToMany(targetEntity="Wayci\BackendBundle\Entity\Distrito", mappedBy="ciudad")
     */
    protected $distritos;   

    /**
     * @ORM\OneToMany(targetEntity="Wayci\FrontendBundle\Entity\Usuario", mappedBy="ciudad")
     */
    protected $usuarios;

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
     * @return Ciudad
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
     * Set fchCreate
     *
     * @param \DateTime $fchCreate
     * @return Ciudad
     */
    public function setFchCreate($fchCreate)
    {
        $this->fchCreate = $fchCreate;
    
        return $this;
    }

    /**
     * Get fchCreate
     *
     * @return \DateTime 
     */
    public function getFchCreate()
    {
        return $this->fchCreate;
    }

    /**
     * Set pais
     *
     * @param \Wayci\BackendBundle\Entity\Pais $pais
     * @return Ciudad
     */
    public function setPais(\Wayci\BackendBundle\Entity\Pais $pais = null)
    {
        $this->pais = $pais;
    
        return $this;
    }

    /**
     * Get pais
     *
     * @return \Wayci\BackendBundle\Entity\Pais 
     */
    public function getPais()
    {
        return $this->pais;
    }
}