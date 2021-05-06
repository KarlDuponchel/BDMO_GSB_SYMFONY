<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FamilleMedicament
 *
 * @ORM\Table(name="famille_medicament")
 * @ORM\Entity
 */
class FamilleMedicament
{
    /**
     * @var string
     *
	 * @ORM\Id
     * @ORM\Column(name="FAM_CODE", type="string", length=10, nullable=false)
     */
    private $famCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="FAM_NOM", type="string", length=50, nullable=true)
     */
    private $famNom;
	
	
	/**
     * @return string
     */
    public function getfamCode(): ?string
    {
        return $this->famCode;
    }
	
	
	/**
     * @return string
     */
    public function getfamNom(): ?string
    {
        return $this->famNom;
    }
	
	/**
     * 
     *
     * @param string $famCode
     *
     * @return FamilleMedicament
     */
    public function setfamCode($famCode)
    {
        $this->famCode = $famCode;

        return $this;
    }
	
	
	/**
     * 
     *
     * @param string $famNom
     *
     * @return FamilleMedicament
     */
    public function setfamNom($famNom)
    {
        $this->famNom = $famNom;

        return $this;
    }


}
