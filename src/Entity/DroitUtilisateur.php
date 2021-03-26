<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DroitUtilisateur
 *
 * @ORM\Table(name="droit_utilisateur")
 * @ORM\Entity
 */
class DroitUtilisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="DRO_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $droId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DRO_NOM_DROIT", type="string", length=38, nullable=true)
     */
    private $droNomDroit;


}
