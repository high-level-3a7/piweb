<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmploiDuTemps
 *
 * @ORM\Table(name="emploi_du_temps")
 * @ORM\Entity
 */
class EmploiDuTemps
{
    /**
     * @var int
     *
     * @ORM\Column(name="IdEmploi", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idemploi;

    /**
     * @var int
     *
     * @ORM\Column(name="IdSeance", type="integer", nullable=false)
     */
    private $idseance;

    /**
     * @var int
     *
     * @ORM\Column(name="idzone", type="integer", nullable=false)
     */
    private $idzone;

    /**
     * @var string
     *
     * @ORM\Column(name="DateE", type="string", length=30, nullable=false)
     */
    private $datee;

    public function getIdemploi(): ?int
    {
        return $this->idemploi;
    }

    public function getIdseance(): ?int
    {
        return $this->idseance;
    }

    public function setIdseance(int $idseance): self
    {
        $this->idseance = $idseance;

        return $this;
    }

    public function getIdzone(): ?int
    {
        return $this->idzone;
    }

    public function setIdzone(int $idzone): self
    {
        $this->idzone = $idzone;

        return $this;
    }

    public function getDatee(): ?string
    {
        return $this->datee;
    }

    public function setDatee(string $datee): self
    {
        $this->datee = $datee;

        return $this;
    }


}
