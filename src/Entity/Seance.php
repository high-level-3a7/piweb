<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Seance
 *
 * @ORM\Table(name="seance", indexes={@ORM\Index(name="fk_seance2", columns={"activiteid"})})
 * @ORM\Entity
 */
class Seance
{
    /**
     * @var int
     *
     * @ORM\Column(name="IdSeance", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idseance;

    /**
     * @var int
     *
     * @ORM\Column(name="Capacite", type="integer", nullable=false)
     */
    private $capacite;

    /**
     * @var int
     *
     * @ORM\Column(name="IdCoach", type="integer", nullable=false)
     */
    private $idcoach;

    /**
     * @var string
     *
     * @ORM\Column(name="DateS", type="string", length=255, nullable=false)
     */
    private $dates;

    /**
     * @var \Activite
     *
     * @ORM\ManyToOne(targetEntity="Activite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="activiteid", referencedColumnName="id")
     * })
     */
    private $activiteid;

    public function getIdseance(): ?int
    {
        return $this->idseance;
    }

    public function getCapacite(): ?int
    {
        return $this->capacite;
    }

    public function setCapacite(int $capacite): self
    {
        $this->capacite = $capacite;

        return $this;
    }

    public function getIdcoach(): ?int
    {
        return $this->idcoach;
    }

    public function setIdcoach(int $idcoach): self
    {
        $this->idcoach = $idcoach;

        return $this;
    }

    public function getDates(): ?string
    {
        return $this->dates;
    }

    public function setDates(string $dates): self
    {
        $this->dates = $dates;

        return $this;
    }

    public function getActiviteid(): ?Activite
    {
        return $this->activiteid;
    }

    public function setActiviteid(?Activite $activiteid): self
    {
        $this->activiteid = $activiteid;

        return $this;
    }


}
