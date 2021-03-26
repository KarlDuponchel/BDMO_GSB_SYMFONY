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
     * @ORM\Column(name="FAM_CODE", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $famCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="FAM_NOM", type="string", length=50, nullable=true)
     */
    private $famNom;


}
