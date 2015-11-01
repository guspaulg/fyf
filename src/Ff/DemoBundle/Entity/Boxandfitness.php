<?php

namespace Ff\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Boxandfitness
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Boxandfitness
{
   /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

     /**
     * @ORM\Column(type="date")
     */
    protected $fecha_inicio;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $precio;

     /**
     * @ORM\Column(type="string", length=100)
     */
    protected $sexo;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $veces;

    /**
     * @ORM\Column(type="integer")
     */
    protected $idpago;

    




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
     * Set fecha_inicio
     *
     * @param \DateTime $fechaInicio
     * @return Box
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fecha_inicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fecha_inicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio()
    {
        return $this->fecha_inicio;
    }

    /**
     * Set precio
     *
     * @param integer $precio
     * @return Box
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return integer 
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     * @return Box
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string 
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set veces
     *
     * @param string $veces
     * @return Box
     */
    public function setVeces($veces)
    {
        $this->veces = $veces;

        return $this;
    }

    /**
     * Get veces
     *
     * @return string 
     */
    public function getVeces()
    {
        return $this->veces;
    }

    /**
     * Set idpago
     *
     * @param integer $idpago
     * @return Box
     */
    public function setIdpago($idpago)
    {
        $this->idpago = $idpago;

        return $this;
    }

    /**
     * Get idpago
     *
     * @return integer 
     */
    public function getIdpago()
    {
        return $this->idpago;
    }

    /**
     * Set otro
     *
     * @param integer $otro
     * @return Box
     */
    public function setOtro($otro)
    {
        $this->otro = $otro;

        return $this;
    }

    
}
