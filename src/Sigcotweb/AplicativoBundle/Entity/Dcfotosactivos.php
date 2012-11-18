<?php

namespace Sigcotweb\AplicativoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sigcotweb\AplicativoBundle\Entity\Dcfotosactivos
 *
 * @ORM\Table(name="dcfotosactivos")
 * @ORM\Entity
 */
class Dcfotosactivos
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
     * @var string $foto
     *
     * @ORM\Column(name="foto", type="string", length=255, nullable=false)
     */
    private $foto;

    /**
     * @var Dcactivos
     *
     * @ORM\ManyToOne(targetEntity="Dcactivos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="activoc_id", referencedColumnName="id")
     * })
     */
    private $activoc;



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
     * @return Dcfotosactivos
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
     * Set foto
     *
     * @param string $foto
     * @return Dcfotosactivos
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
     * Set activoc
     *
     * @param Sigcotweb\AplicativoBundle\Entity\Dcactivos $activoc
     * @return Dcfotosactivos
     */
    public function setActivoc(\Sigcotweb\AplicativoBundle\Entity\Dcactivos $activoc = null)
    {
        $this->activoc = $activoc;
    
        return $this;
    }

    /**
     * Get activoc
     *
     * @return Sigcotweb\AplicativoBundle\Entity\Dcactivos 
     */
    public function getActivoc()
    {
        return $this->activoc;
    }
    
    #funciones para tratar las imagenes
    
    public function getAbsolutePath()
    {
        return null === $this->path ? null : $this->getUploadRootDir().'/'.$this->foto;
    }

    public function getWebPath()
    {
        return null === $this->foto ? null : $this->getUploadDir().'/'.$this->foto;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw when displaying uploaded doc/image in the view.
        return 'uploads/documents';
    }
    
    public function subirFoto($directorioDestino)
    {
        if (null === $this->foto) {
        return;
        }
        //$directorioDestino = __DIR__.'/../../../../web/uploads/images';
        $nombreArchivoFoto = uniqid('fotoact-').'-foto1.jpg';//uniqid('cupon-').'-foto1.jpg';
        $this->foto->move($directorioDestino, $nombreArchivoFoto);
        $this->setFoto($nombreArchivoFoto);
       
    }
}