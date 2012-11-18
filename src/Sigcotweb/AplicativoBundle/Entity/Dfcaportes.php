<?php

namespace Sigcotweb\AplicativoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sigcotweb\AplicativoBundle\Entity\Dfcaportes
 *
 * @ORM\Table(name="dfcaportes")
 * @ORM\Entity
 */
class Dfcaportes
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
     * @var float $monto
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
     * @param float $monto
     * @return Dfcaportes
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;
    
        return $this;
    }

    /**
     * Get monto
     *
     * @return float 
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Dfcaportes
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
     * Set cooperativista
     *
     * @param Sigcotweb\AplicativoBundle\Entity\Cooperativistas $cooperativista
     * @return Dfcaportes
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
}