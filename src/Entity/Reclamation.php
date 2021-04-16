<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="IDX_CE606404C54C8C93", columns={"type_id"}), @ORM\Index(name="IDX_CE606404D5E86FF", columns={"etat_id"}), @ORM\Index(name="IDX_CE606404A76ED395", columns={"user_id"})})
 * @ORM\Entity
 */
class Reclamation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=255, nullable=false)
     */
    private $contenu;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="daterec", type="date", nullable=true)
     */
    private $daterec;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \TypeReclamation
     *
     * @ORM\ManyToOne(targetEntity="TypeReclamation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     * })
     */
    private $type;

    /**
     * @var \Etatreclamation
     *
     * @ORM\ManyToOne(targetEntity="Etatreclamation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="etat_id", referencedColumnName="id")
     * })
     */
    private $etat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getDaterec(): ?\DateTimeInterface
    {
        return $this->daterec;
    }

    public function setDaterec(?\DateTimeInterface $daterec): self
    {
        $this->daterec = $daterec;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getType(): ?TypeReclamation
    {
        return $this->type;
    }

    public function setType(?TypeReclamation $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getEtat(): ?Etatreclamation
    {
        return $this->etat;
    }

    public function setEtat(?Etatreclamation $etat): self
    {
        $this->etat = $etat;

        return $this;
    }


}
