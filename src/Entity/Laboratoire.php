<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Laboratoire
 *
 * @ORM\Table(name="laboratoire")
 * @ORM\Entity
 */
class Laboratoire
{
    /**
     * @var int
     *
     * @ORM\Column(name="LAB_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $labId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LAB_LIBELLE", type="string", length=50, nullable=true)
     */
    private $labLibelle;

    
	
	/**
     * @return integer
     */
    public function getLabId(): ?integer
    {
        return $this->labId;
    }
	
	/**
     * @return string
     */
    public function getlabLibelle(): ?string
    {
        return $this->labLibelle;
    }
	
	/**
     * 
     *
     * @param string $labLibelle
     *
     * @return Laboratoire
     */
    public function setlabLibelle($labLibelle)
    {
        $this->labLibelle = $labLibelle;

        return $this;
    }

}
