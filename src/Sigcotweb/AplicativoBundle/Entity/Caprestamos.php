<?php

namespace Sigcotweb\AplicativoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sigcotweb\AplicativoBundle\Entity\Caprestamos
 *
 * @ORM\Table(name="caprestamos")
 * @ORM\Entity
 */
class Caprestamos
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer $monto
     *
     * @ORM\Column(name="monto", type="decimal", scale=2, nullable=false)
     */
    private $monto;

    /**
     * @var \DateTime $fecha
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var integer $numaportes
     *
     * @ORM\Column(name="numaportes", type="integer", nullable=false)
     */
    private $numaportes;

    /**
     * @var integer $interes
     *
     * @ORM\Column(name="interes", type="integer", nullable=false)
     */
    private $interes;

    /**
     * @var Cooperativistas
     *
     * @ORM\ManyToOne(targetEntity="Cooperativistas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cooperativista_id", referencedColumnName="id")
     * })
     */
    private $cooperativista;



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
     * Set monto
     *
     * @param integer $monto
     * @return Caprestamos
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;
    
        return $this;
    }

    /**
     * Get monto
     *
     * @return integer 
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Caprestamos
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    
        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set numaportes
     *
     * @param integer $numaportes
     * @return Caprestamos
     */
    public function setNumaportes($numaportes)
    {
        $this->numaportes = $numaportes;
    
        return $this;
    }

    /**
     * Get numaportes
     *
     * @return integer 
     */
    public function getNumaportes()
    {
        return $this->numaportes;
    }

    /**
     * Set interes
     *
     * @param integer $interes
     * @return Caprestamos
     */
    public function setInteres($interes)
    {
        $this->interes = $interes;
    
        return $this;
    }

    /**
     * Get interes
     *
     * @return integer 
     */
    public function getInteres()
    {
        return $this->interes;
    }

    /**
     * Set cooperativista
     *
     * @param Sigcotweb\AplicativoBundle\Entity\Cooperativistas $cooperativista
     * @return Caprestamos
     */
    public function setCooperativista(\Sigcotweb\AplicativoBundle\Entity\Cooperativistas $cooperativista = null)
    {
        $this->cooperativista = $cooperativista;
    
        return $this;
    }

    /**
     * Get cooperativista
     *
     * @return Sigcotweb\AplicativoBundle\Entity\Cooperativistas 
     */
    public function getCooperativista()
    {
        return $this->cooperativista;
    }
    
    public function __toString(){
        
        return $this->getCooperativista()." ".$this->getFecha()." ".$this->getMonto();
    }
}