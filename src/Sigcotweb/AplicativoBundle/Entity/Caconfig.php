<?php

namespace Sigcotweb\AplicativoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sigcotweb\AplicativoBundle\Entity\Caconfig
 *
 * @ORM\Table(name="caconfig")
 * @ORM\Entity
 */
class Caconfig
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
     * @var integer $porcentajemax
     *
     * @ORM\Column(name="porcentajemax", type="integer", nullable=false)
     */
    private $porcentajemax;

    /**
     * @var integer $interes
     *
     * @ORM\Column(name="interes", type="integer", nullable=false)
     */
    private $interes;



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
     * Set porcentajemax
     *
     * @param integer $porcentajemax
     * @return Caconfig
     */
    public function setPorcentajemax($porcentajemax)
    {
        $this->porcentajemax = $porcentajemax;
    
        return $this;
    }

    /**
     * Get porcentajemax
     *
     * @return integer 
     */
    public function getPorcentajemax()
    {
        return $this->porcentajemax;
    }

    /**
     * Set interes
     *
     * @param integer $interes
     * @return Caconfig
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
}