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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Utilisateur", inversedBy="lab")
     * @ORM\JoinTable(name="associer",
     *   joinColumns={
     *     @ORM\JoinColumn(name="LAB_ID", referencedColumnName="LAB_ID")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="UTI_ID", referencedColumnName="UTI_ID")
     *   }
     * )
     */
    private $uti;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->uti = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
