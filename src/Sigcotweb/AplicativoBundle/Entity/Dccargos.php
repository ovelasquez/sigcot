<?php

namespace Sigcotweb\AplicativoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sigcotweb\AplicativoBundle\Entity\Dccargos
 *
 * @ORM\Table(name="dccargos")
 * @ORM\Entity
 */
class Dccargos
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
     * @var string $identificador
     *
     * @ORM\Column(name="identificador", type="string", length=255, nullable=false)
     */
    private $identificador;

    /**
     * @var string $descripcion
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=false)
     */
    private $descripcion;



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
     * @return Dccargos
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
     * @return Dccargos
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
    
    public function __toString(){
        
        return $this->getIdentificador();
    }
}