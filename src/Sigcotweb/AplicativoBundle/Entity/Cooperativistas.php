<?php

namespace Sigcotweb\AplicativoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sigcotweb\AplicativoBundle\Entity\Cooperativistas
 *
 * @ORM\Table(name="cooperativistas")
 * @ORM\Entity
 */
class Cooperativistas
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
     * @var string $usuario
     *
     * @ORM\Column(name="usuario", type="string", length=255, nullable=false)
     */
    private $usuario;

    /**
     * @var string $clave
     *
     * @ORM\Column(name="clave", type="string", length=255, nullable=false)
     */
    private $clave;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    private $nombre;

    /**
     * @var string $apellido
     *
     * @ORM\Column(name="apellido", type="string", length=255, nullable=false)
     */
    private $apellido;

    /**
     * @var string $cinum
     *
     * @ORM\Column(name="cinum", type="string", length=10, nullable=false)
     */
    private $cinum;

    /**
     * @var string $rifnum
     *
     * @ORM\Column(name="rifnum", type="string", length=10, nullable=false)
     */
    private $rifnum;

    /**
     * @var string $direccion
     *
     * @ORM\Column(name="direccion", type="string", length=255, nullable=false)
     */
    private $direccion;

    /**
     * @var string $telefonos
     *
     * @ORM\Column(name="telefonos", type="string", length=255, nullable=false)
     */
    private $telefonos;

    /**
     * @var string $foto
     *
     * @ORM\Column(name="foto", type="string", length=255, nullable=false)
     */
    private $foto;

    /**
     * @var string $ciarc
     *
     * @ORM\Column(name="ciarc", type="string", length=255, nullable=false)
     */
    private $ciarc;

    /**
     * @var string $rifarc
     *
     * @ORM\Column(name="rifarc", type="string", length=255, nullable=false)
     */
    private $rifarc;

    /**
     * @var Dccargos
     *
     * @ORM\ManyToOne(targetEntity="Dccargos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dccargo_id", referencedColumnName="id")
     * })
     */
    private $dccargo;



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
     * Set usuario
     *
     * @param string $usuario
     * @return Cooperativistas
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    
        return $this;
    }

    /**
     * Get usuario
     *
     * @return string 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set clave
     *
     * @param string $clave
     * @return Cooperativistas
     */
    public function setClave($clave)
    {
        $this->clave = $clave;
    
        return $this;
    }

    /**
     * Get clave
     *
     * @return string 
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Cooperativistas
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
     * Set apellido
     *
     * @param string $apellido
     * @return Cooperativistas
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    
        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set cinum
     *
     * @param string $cinum
     * @return Cooperativistas
     */
    public function setCinum($cinum)
    {
        $this->cinum = $cinum;
    
        return $this;
    }

    /**
     * Get cinum
     *
     * @return string 
     */
    public function getCinum()
    {
        return $this->cinum;
    }

    /**
     * Set rifnum
     *
     * @param string $rifnum
     * @return Cooperativistas
     */
    public function setRifnum($rifnum)
    {
        $this->rifnum = $rifnum;
    
        return $this;
    }

    /**
     * Get rifnum
     *
     * @return string 
     */
    public function getRifnum()
    {
        return $this->rifnum;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Cooperativistas
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    
        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefonos
     *
     * @param string $telefonos
     * @return Cooperativistas
     */
    public function setTelefonos($telefonos)
    {
        $this->telefonos = $telefonos;
    
        return $this;
    }

    /**
     * Get telefonos
     *
     * @return string 
     */
    public function getTelefonos()
    {
        return $this->telefonos;
    }

    /**
     * Set foto
     *
     * @param string $foto
     * @return Cooperativistas
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;
    
        return $this;
    }

    /**
     * Get foto
     *
     * @return string 
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set ciarc
     *
     * @param string $ciarc
     * @return Cooperativistas
     */
    public function setCiarc($ciarc)
    {
        $this->ciarc = $ciarc;
    
        return $this;
    }

    /**
     * Get ciarc
     *
     * @return string 
     */
    public function getCiarc()
    {
        return $this->ciarc;
    }

    /**
     * Set rifarc
     *
     * @param string $rifarc
     * @return Cooperativistas
     */
    public function setRifarc($rifarc)
    {
        $this->rifarc = $rifarc;
    
        return $this;
    }

    /**
     * Get rifarc
     *
     * @return string 
     */
    public function getRifarc()
    {
        return $this->rifarc;
    }

    /**
     * Set dccargo
     *
     * @param Sigcotweb\AplicativoBundle\Entity\Dccargos $dccargo
     * @return Cooperativistas
     */
    public function setDccargo(\Sigcotweb\AplicativoBundle\Entity\Dccargos $dccargo = null)
    {
        $this->dccargo = $dccargo;
    
        return $this;
    }

    /**
     * Get dccargo
     *
     * @return Sigcotweb\AplicativoBundle\Entity\Dccargos 
     */
    public function getDccargo()
    {
        return $this->dccargo;
    }
    
    public function __toString(){
        
        return $this->getNombre()." ".$this->getApellido();
    }
    
    public function subirFoto($directorioDestino)
    {
        if (null === $this->foto) {
        return;
        }
        //$directorioDestino = __DIR__.'/../../../../web/uploads/images';
        $nombreArchivoFoto = uniqid('fotocoo-').'-foto1.jpg';//uniqid('cupon-').'-foto1.jpg';
        $this->foto->move($directorioDestino, $nombreArchivoFoto);
        $this->setFoto($nombreArchivoFoto);
        
        if (null === $this->ciarc) {
        return;
        }
        //$directorioDestino = __DIR__.'/../../../../web/uploads/images';
        $nombreArchivoCi = uniqid('cicoo-').'-foto1.jpg';//uniqid('cupon-').'-foto1.jpg';
        $this->ciarc->move($directorioDestino, $nombreArchivoCi);
        $this->setCiarc($nombreArchivoCi);
        
        if (null === $this->rifarc) {
        return;
        }
        //$directorioDestino = __DIR__.'/../../../../web/uploads/images';
        $nombreArchivoRif = uniqid('rifcoo-').'-foto1.jpg';//uniqid('cupon-').'-foto1.jpg';
        $this->rifarc->move($directorioDestino, $nombreArchivoRif);
        $this->setRifarc($nombreArchivoRif);
    }
}