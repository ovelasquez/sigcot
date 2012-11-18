<?php

namespace Sigcotweb\AplicativoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sigcotweb\AplicativoBundle\Entity\Caaportesdeudas
 *
 * @ORM\Table(name="caaportesdeudas")
 * @ORM\Entity
 */
class Caaportesdeudas
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
     * @var Caprestamos
     *
     * @ORM\ManyToOne(targetEntity="Caprestamos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="caprestamo_id", referencedColumnName="id")
     * })
     */
    private $caprestamo;



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
     * @return Caaportesdeudas
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
     * @return Caaportesdeudas
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
     * Set caprestamo
     *
     * @param Sigcotweb\AplicativoBundle\Entity\Caprestamos $caprestamo
     * @return Caaportesdeudas
     */
    public function setCaprestamo(\Sigcotweb\AplicativoBundle\Entity\Caprestamos $caprestamo = null)
    {
        $this->caprestamo = $caprestamo;
    
        return $this;
    }

    /**
     * Get caprestamo
     *
     * @return Sigcotweb\AplicativoBundle\Entity\Caprestamos 
     */
    public function getCaprestamo()
    {
        return $this->caprestamo;
    }
}