<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
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
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=140, nullable=false)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=140, nullable=false)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=140, nullable=false)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=140, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=140, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="roles", type="string", length=140, nullable=false)
     */
    private $roles;

    /**
     * @var string
     *
     * @ORM\Column(name="birthDay", type="string", length=140, nullable=false)
     */
    private $birthday;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=140, nullable=false)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=140, nullable=false)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="string", length=140, nullable=false)
     */
    private $adress;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=140, nullable=false)
     */
    private $gender;

    /**
     * @var int
     *
     * @ORM\Column(name="validation", type="integer", nullable=false)
     */
    private $validation;

    /**
     * @var string
     *
     * @ORM\Column(name="idcode", type="string", length=140, nullable=false)
     */
    private $idcode;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Activite", inversedBy="user")
     * @ORM\JoinTable(name="user_activite",
     *   joinColumns={
     *     @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="activite_id", referencedColumnName="id")
     *   }
     * )
     */
    private $activite;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->activite = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getRoles(): ?string
    {
        return $this->roles;
    }

    public function setRoles(string $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    public function getBirthday(): ?string
    {
        return $this->birthday;
    }

    public function setBirthday(string $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getValidation(): ?int
    {
        return $this->validation;
    }

    public function setValidation(int $validation): self
    {
        $this->validation = $validation;

        return $this;
    }

    public function getIdcode(): ?string
    {
        return $this->idcode;
    }

    public function setIdcode(string $idcode): self
    {
        $this->idcode = $idcode;

        return $this;
    }

    /**
     * @return Collection|Activite[]
     */
    public function getActivite(): Collection
    {
        return $this->activite;
    }

    public function addActivite(Activite $activite): self
    {
        if (!$this->activite->contains($activite)) {
            $this->activite[] = $activite;
        }

        return $this;
    }

    public function removeActivite(Activite $activite): self
    {
        $this->activite->removeElement($activite);

        return $this;
    }

}
