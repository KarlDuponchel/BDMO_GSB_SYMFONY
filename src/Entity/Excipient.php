<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Excipient
 *
 * @ORM\Table(name="excipient")
 * @ORM\Entity
 */
class Excipient
{
    /**
     * @var int
     *
     * @ORM\Column(name="EXC_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $excId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EXC_NOM", type="string", length=50, nullable=true)
     */
    private $excNom;
	
	
	/**
     * @return string|null
     */
    public function getexcNom(): ?string
    {
        return $this->excNom;
    }
	
	
	 /**
     * 
     *
     * @param string $excNom
     *
     * @return Excipient
     */
    public function setExcNom($excNom)
    {
        $this->excNom = $excNom;

        return $this;
    }
	
	
	/**
     * @return integer
     */
    public function getexcId(): ?integer
    {
        return $this->excId;
    }
	
	
	

}
