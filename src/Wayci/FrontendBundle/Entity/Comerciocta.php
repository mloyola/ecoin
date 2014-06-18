<?php

namespace Wayci\FrontendBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Comerciocta
 */
class Comerciocta
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $numero;

    /**
    * @ORM\ManyToOne(targetEntity="Wayci\BackendBundle\Entity\Banco", inversedBy="comercioscta")
    * @ORM\JoinColumn(name="banco_id", referencedColumnName="id")
    * @Assert\NotBlank(message="Seleccione el banco")  
    */
    protected $banco;   

    /**
    * @ORM\ManyToOne(targetEntity="Wayci\BackendBundle\Entity\Tipocta", inversedBy="comercioscta")
    * @ORM\JoinColumn(name="tipocta_id", referencedColumnName="id")
    * @Assert\NotBlank(message="Seleccione el tipo de cuenta")  
    */
    protected $tipocta;   

    /**
    * @ORM\ManyToOne(targetEntity="Wayci\BackendBundle\Entity\Moneda", inversedBy="comercioscta")
    * @ORM\JoinColumn(name="moneda_id", referencedColumnName="id")
    * @Assert\NotBlank(message="Seleccione la moneda")  
    */
    protected $moneda;

    /**
    * @ORM\ManyToOne(targetEntity="Wayci\FrontendBundle\Entity\Comercio", inversedBy="comercioscta")
    * @ORM\JoinColumn(name="comercio_id", referencedColumnName="id")
    */
    protected $comercio;            

    /**
     * @var \DateTime
     */
    private $fchCreate;

    /**
     * @var \DateTime
     */
    private $fchUpdate;


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
     * Set numero
     *
     * @param string $numero
     * @return Comerciocta
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    
        return $this;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set fchCreate
     *
     * @param \DateTime $fchCreate
     * @return Comerciocta
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
     * Set fchUpdate
     *
     * @param \DateTime $fchUpdate
     * @return Comerciocta
     */
    public function setFchUpdate($fchUpdate)
    {
        $this->fchUpdate = $fchUpdate;
    
        return $this;
    }

    /**
     * Get fchUpdate
     *
     * @return \DateTime 
     */
    public function getFchUpdate()
    {
        return $this->fchUpdate;
    }

    /**
     * Set comercio
     *
     * @param \Wayci\FrontendBundle\Entity\Comercio $comercio
     * @return Comerciocta
     */
    public function setComercio(\Wayci\FrontendBundle\Entity\Comercio $comercio = null)
    {
        $this->comercio = $comercio;
    
        return $this;
    }

    /**
     * Get comercio
     *
     * @return \Wayci\FrontendBundle\Entity\Comercio 
     */
    public function getComercio()
    {
        return $this->comercio;
    }

    /**
     * Set banco
     *
     * @param \Wayci\BackendBundle\Entity\Banco $banco
     * @return Comerciocta
     */
    public function setBanco(\Wayci\BackendBundle\Entity\Banco $banco = null)
    {
        $this->banco = $banco;
    
        return $this;
    }

    /**
     * Get banco
     *
     * @return \Wayci\BackendBundle\Entity\Banco 
     */
    public function getBanco()
    {
        return $this->banco;
    }

    /**
     * Set tipocta
     *
     * @param \Wayci\BackendBundle\Entity\Tipocta $tipocta
     * @return Comerciocta
     */
    public function setTipocta(\Wayci\BackendBundle\Entity\Tipocta $tipocta = null)
    {
        $this->tipocta = $tipocta;
    
        return $this;
    }

    /**
     * Get tipocta
     *
     * @return \Wayci\BackendBundle\Entity\Tipocta 
     */
    public function getTipocta()
    {
        return $this->tipocta;
    }

    /**
     * Set moneda
     *
     * @param \Wayci\BackendBundle\Entity\Moneda $moneda
     * @return Comerciocta
     */
    public function setMoneda(\Wayci\BackendBundle\Entity\Moneda $moneda = null)
    {
        $this->moneda = $moneda;
    
        return $this;
    }

    /**
     * Get moneda
     *
     * @return \Wayci\BackendBundle\Entity\Moneda 
     */
    public function getMoneda()
    {
        return $this->moneda;
    }
}