<?php

namespace Sigcotweb\AplicativoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sigcotweb\AplicativoBundle\Entity\Dcactivos
 *
 * @ORM\Table(name="dcactivos")
 * @ORM\Entity
 */
class Dcactivos
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
     * @var string $tipo
     *
     * @ORM\Column(name="tipo", type="string", length=255, nullable=false)
     */
    private $tipo;

    /**
     * @var string $marca
     *
     * @ORM\Column(name="marca", type="string", length=255, nullable=false)
     */
    private $marca;

    /**
     * @var string $modelo
     *
     * @ORM\Column(name="modelo", type="string", length=255, nullable=false)
     */
    private $modelo;

    /**
     * @var string $anio
     *
     * @ORM\Column(name="anio", type="string", length=4, nullable=false)
     */
    private $anio;

    /**
     * @var string $placa
     *
     * @ORM\Column(name="placa", type="string", length=255, nullable=false)
     */
    private $placa;

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
     * Set tipo
     *
     * @param string $tipo
     * @return Dcactivos
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    
        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set marca
     *
     * @param string $marca
     * @return Dcactivos
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;
    
        return $this;
    }

    /**
     * Get marca
     *
     * @return string 
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set modelo
     *
     * @param string $modelo
     * @return Dcactivos
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    
        return $this;
    }

    /**
     * Get modelo
     *
     * @return string 
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set anio
     *
     * @param string $anio
     * @return Dcactivos
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;
    
        return $this;
    }

    /**
     * Get anio
     *
     * @return string 
     */
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * Set placa
     *
     * @param string $placa
     * @return Dcactivos
     */
    public function setPlaca($placa)
    {
        $this->placa = $placa;
    
        return $this;
    }

    /**
     * Get placa
     *
     * @return string 
     */
    public function getPlaca()
    {
        return $this->placa;
    }

    /**
     * Set cooperativista
     *
     * @param Sigcotweb\AplicativoBundle\Entity\Cooperativistas $cooperativista
     * @return Dcactivos
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
        
        return "Activo con placa: ".$this->placa." de ".$this->getCooperativista();
    }
}