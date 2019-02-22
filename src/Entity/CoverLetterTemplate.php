<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CoverLetterTemplateRepository")
 */
class CoverLetterTemplate
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *      min = 2,
     *      max = 20,
     *      minMessage = "Votre prénom doit avoir au minimum {{ limit }} caractères.",
     *      maxMessage = "Votre prénom ne peut pas dépasser {{ limit }} caractères."
     * )
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *      min = 2,
     *      max = 25,
     *      minMessage = "Votre nom doit avoir au minimum {{ limit }} caractères.",
     *      maxMessage = "Votre nom ne peut pas dépasser {{ limit }} caractères."
     * )
     */
    private $lastName;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *      min = 5,
     *      max = 30,
     *      minMessage = "Votre adresse doit faire au minimum {{ limit }} caractères.",
     *      maxMessage = "Votre adresse ne peut dépasser {{ limit }} caractères."
     * )
     */
    private $address;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Type(
     *     type="integer",
     *     message="Votre code postal {{ value }} n'est pas valide"
     * )
     */
    private $postalCode;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *      min = 2,
     *      max = 30,
     *      minMessage = "Votre ville doit faire au minimum {{ limit }} caractères.",
     *      maxMessage = "Votre ville ne peut dépasser {{ limit }} caractères."
     * )
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *      min = 7,
     *      max = 15,
     *      minMessage = "Votre téléphone n'est pas valide (7 caractères minimum)",
     *      maxMessage = "Votre téléphone mobile est trop long"
     * )
     */
    private $mobilePhone;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     *  @Assert\Email(
     *     message = "L'adresse mail '{{ value }}' n'est pas valide",
     * )
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $recipientName;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *      min = 2,
     *      max = 25,
     *      minMessage = "Le nom de l'entreprise doit avoir au minimum {{ limit }} caractères.",
     *      maxMessage = "Le nom de l'entreprise ne peut pas dépasser {{ limit }} caractères."
     * )
     */
    private $recipientAddress;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Type(
     *     type="integer",
     *     message="Le code postal {{ value }} n'est pas valide"
     * )
     */
    private $recipientPostalCode;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *      min = 2,
     *      max = 20,
     *      minMessage = "la ville doit faire au minimum {{ limit }} caractères.",
     *      maxMessage = "La ville ne peut dépasser {{ limit }} caractères."
     * )
     */
    private $recipientCity;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *      min = 2,
     *      max = 80,
     *      minMessage = "L'objet doit faire au minimum {{ limit }} caractères.",
     *      maxMessage = "L'objet ne peut dépasser {{ limit }} caractères."
     * )
     */
    private $object;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank
     */
    private $message;

    /**
     * @Assert\NotBlank
     */
    public $checkValid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $token;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getPostalCode(): ?int
    {
        return $this->postalCode;
    }

    public function setPostalCode(int $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getMobilePhone(): ?string
    {
        return $this->mobilePhone;
    }

    public function setMobilePhone(string $mobilePhone): self
    {
        $this->mobilePhone = $mobilePhone;

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

    public function getRecipientName(): ?string
    {
        return $this->recipientName;
    }

    public function setRecipientName(string $recipientName): self
    {
        $this->recipientName = $recipientName;

        return $this;
    }

    public function getRecipientAddress(): ?string
    {
        return $this->recipientAddress;
    }

    public function setRecipientAddress(string $recipientAddress): self
    {
        $this->recipientAddress = $recipientAddress;

        return $this;
    }

    public function getRecipientPostalCode(): ?int
    {
        return $this->recipientPostalCode;
    }

    public function setRecipientPostalCode(int $recipientPostalCode): self
    {
        $this->recipientPostalCode = $recipientPostalCode;

        return $this;
    }

    public function getRecipientCity(): ?string
    {
        return $this->recipientCity;
    }

    public function setRecipientCity(string $recipientCity): self
    {
        $this->recipientCity = $recipientCity;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getObject(): ?string
    {
        return $this->object;
    }

    public function setObject(string $object): self
    {
        $this->object = $object;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(string $token): self
    {
        $letter = "azertyuiopqsdfghjklmwxcvbn".$token;
        $number = "0123456789".$token;
        $this->token = md5(str_shuffle(str_shuffle($letter).$number.str_shuffle($number).$letter));

        return $this;
    }
}
