<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Outils
 *
 * @ORM\Table(name="outils")
 * @ORM\Entity
 */
class Outils
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_outils", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOutils;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;

    public function setimage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getimage(): ?string
    {
        return $this->image;
    }
}
