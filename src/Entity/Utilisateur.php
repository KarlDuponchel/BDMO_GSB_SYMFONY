<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur", indexes={@ORM\Index(name="FK_UTILISATEUR_DROIT_UTILISATEUR", columns={"DRO_ID"})})
 * @ORM\Entity
 */
class Utilisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="UTI_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $utiId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="UTI_NOM", type="string", length=38, nullable=true)
     */
    private $utiNom;

    /**
     * @return string|null
     */
    public function getUtiNom(): ?string
    {
        return $this->utiNom;
    }

    /**
     * @return int
     */
    public function getUtiId(): int
    {
        return $this->utiId;
    }

    /**
     * @var string|null
     *
     * @ORM\Column(name="UTI_PRENOM", type="string", length=38, nullable=true)
     */
    private $utiPrenom;

    /**
     * @return string|null
     */
    public function getUtiPrenom(): ?string
    {
        return $this->utiPrenom;
    }

    /**
     * @var string|null
     *
     * @ORM\Column(name="UTI_IDENTIFIANT", type="string", length=50, nullable=true)
     */
    private $utiIdentifiant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="UTI_MDP", type="string", length=50, nullable=true)
     */
    private $utiMdp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="UTI_EMAIL", type="string", length=50, nullable=true)
     */
    private $utiEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="UTI_TYPE_UTILISATEUR", type="string", length=38, nullable=true)
     */
    private $utiTypeUtilisateur;

    /**
     * @var \DroitUtilisateur
     *
     * @ORM\ManyToOne(targetEntity="DroitUtilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="DRO_ID", referencedColumnName="DRO_ID")
     * })
     */
    private $dro;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Laboratoire", mappedBy="uti")
     */
    private $lab;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lab = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
