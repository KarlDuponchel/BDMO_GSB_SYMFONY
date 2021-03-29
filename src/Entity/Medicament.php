<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medicament
 *
 * @ORM\Table(name="medicament", indexes={@ORM\Index(name="FK_MEDICAMENT_LABORATOIRE", columns={"LAB_ID"}), @ORM\Index(name="FK_MEDICAMENT_FAMILLE_MEDICAMENT", columns={"FAM_CODE"})})
 * @ORM\Entity
 */
class Medicament
{
    /**
     * @var string
     *
     * @ORM\Column(name="MED_DEPOTLEGAL", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $medDepotlegal;

    /**
     * @return string
     */
    public function getMedDepotlegal(): string
    {
        return $this->medDepotlegal;
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
     * @var float|null
     *
     * @ORM\Column(name="MED_PRIX", type="float", precision=10, scale=0, nullable=true)
     */
    private $medPrix;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MED_EFFETS", type="string", length=255, nullable=true)
     */
    private $medEffets;

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
     * @var string|null
     *
     * @ORM\Column(name="MED_CONTREINDIC", type="string", length=255, nullable=true)
     */
    private $medContreindic;

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
     * @var \FamilleMedicament
     *
     * @ORM\ManyToOne(targetEntity="FamilleMedicament")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FAM_CODE", referencedColumnName="FAM_CODE")
     * })
     */
    private $famCode;

    /**
     * @var \Laboratoire
     *
     * @ORM\ManyToOne(targetEntity="Laboratoire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="LAB_ID", referencedColumnName="LAB_ID")
     * })
     */
    private $lab;


}
