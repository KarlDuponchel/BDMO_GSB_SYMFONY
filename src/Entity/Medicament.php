<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medicament
 *
 * @ORM\Table(name="medicament", indexes={@ORM\Index(name="FK_MEDICAMENT_LABORATOIRE", columns={"LAB_ID"}), @ORM\Index(name="FK_MEDICAMENT_EXCIPIENT", columns={"EXC_ID"}), @ORM\Index(name="FK_MEDICAMENT_FAMILLE_MEDICAMENT", columns={"FAM_CODE"})})
 * @ORM\Entity
 */
class Medicament
{
    /**
     * @var string
     *
	 * @ORM\Id
     * @ORM\Column(name="MED_DEPOTLEGAL", type="string", length=50, nullable=false)     
     */
    private $medDepotlegal;
	
	/**
     * @return string
     */
    public function getMedDepotlegal(): ?string
    {
        return $this->medDepotlegal;
    }
	
	
	 /**
     * 
     *
     * @param string $medDepotlegal
     *
     * @return Medicament
     */
    public function setMedDepotlegal($medDepotlegal)
    {
        $this->medDepotlegal = $medDepotlegal;

        return $this;
    }
	
	

    /**
     * @var string|null
     *
     * @ORM\Column(name="FAM_CODE", type="string", length=10, nullable=true)
     */
    private $famCode;
	
	/**
     * @return string
     */
    public function getfamCode(): ?string
    {
        return $this->famCode;
    }
	
	 /**
     * 
     *
     * @param string $famCode
     *
     * @return Medicament
     */
    public function setfamCode($famCode)
    {
        $this->famCode = $famCode;

        return $this;
    }
	
	
    /**
     * @var int|null
     *
     * @ORM\Column(name="LAB_ID", type="integer", nullable=true)
     */
    private $labId;
	
	/**
     * @return int
     */
    public function getlabId(): ?int
    {
        return $this->labId;
    }
	
	/**
     * 
     *
     * @param int $labId
     *
     * @return Medicament
     */
    public function setlabId($labId)
    {
        $this->labId = $labId;

        return $this;
    }
	
	
	
    /**
     * @var string|null
     *
     * @ORM\Column(name="MED_NOMCOMMERCIAL", type="string", length=50, nullable=true)
     */
    private $medNomcommercial;
	
	/**
     * @return string|null
     */
    public function getMedNomcommercial(): ?string
    {
        return $this->medNomcommercial;
    }
	
	 /**
     * 
     *
     * @param string $medNomcommercial
     *
     * @return Medicament
     */
    public function setmedNomcommercial($medNomcommercial)
    {
        $this->medNomcommercial = $medNomcommercial;

        return $this;
    }
	
	

    /**
     * @var float|null
     *
     * @ORM\Column(name="MED_PRIX", type="float", precision=10, scale=0, nullable=true)
     */
    private $medPrix;
	
	/**
     * @return float
     */
    public function getmedPrix(): ?float
    {
        return $this->medPrix;
    }
	
	 /**
     * 
     *
     * @param float $medPrix
     *
     * @return Medicament
     */
    public function setmedPrix($medPrix)
    {
        $this->medPrix = $medPrix;

        return $this;
    }

    /**
     * @var string|null
     *
     * @ORM\Column(name="MED_EFFETS", type="string", length=255, nullable=true)
     */
    private $medEffets;
	
	/**
     * @return string
     */
    public function getmedEffets(): ?string
    {
        return $this->medEffets;
    }
	
	 /**
     * 
     *
     * @param string $medEffets
     *
     * @return Medicament
     */
    public function setmedEffets($medEffets)
    {
        $this->medEffets = $medEffets;

        return $this;
    }

    /**
     * @var string|null
     *
     * @ORM\Column(name="MED_COMPOSITION", type="string", length=100, nullable=true)
     */
    private $medComposition;
	
	/**
     * @return string|null
     */
    public function getMedComposition(): ?string
    {
        return $this->medComposition;
    }
	
	/**
     * 
     *
     * @param string $medComposition
     *
     * @return Medicament
     */
    public function setmedComposition($medComposition)
    {
        $this->medComposition = $medComposition;

        return $this;
    }

    /**
     * @var string|null
     *
     * @ORM\Column(name="MED_CONTREINDIC", type="string", length=255, nullable=true)
     */
    private $medContreindic;
	
	/**
     * @return string
     */
    public function getmedContreIndic(): ?string
    {
        return $this->medContreindic;
    }
	
	/**
     * 
     *
     * @param string $medContreindic
     *
     * @return Medicament
     */
    public function setmedContreindic($medContreindic)
    {
        $this->medContreindic = $medContreindic;

        return $this;
    }
	

    /**
     * @var string|null
     *
     * @ORM\Column(name="MED_QUANTITE", type="string", length=10, nullable=true)
     */
    private $medQuantite;
	
	/**
     * @return string|null
     */
    public function getMedQuantite(): ?string
    {
        return $this->medQuantite;
    }
	
	/**
     * 
     *
     * @param string $medQuantite
     *
     * @return Medicament
     */
    public function setmedQuantite($medQuantite)
    {
        $this->medQuantite = $medQuantite;

        return $this;
    }

    /**
     * @var int|null
     *
     * @ORM\Column(name="EXC_ID", type="integer", nullable=false)
     */
    private $excId;


}
