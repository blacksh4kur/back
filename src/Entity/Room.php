<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RoomRepository")
 */
class Room
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="text", length=255)
     */
    private $content_roompublic;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img_roompublic;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $places_roompublic;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $price_roompublic;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Disponible;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getContentRoompublic(): ?string
    {
        return $this->content_roompublic;
    }

    public function setContentRoompublic(string $content_roompublic): self
    {
        $this->content_roompublic = $content_roompublic;

        return $this;
    }

    public function getImgRoompublic(): ?string
    {
        return $this->img_roompublic;
    }

    public function setImgRoompublic(?string $img_roompublic): self
    {
        $this->img_roompublic = $img_roompublic;

        return $this;
    }

    public function getPlacesRoompublic(): ?string
    {
        return $this->places_roompublic;
    }

    public function setPlacesRoompublic(string $places_roompublic): self
    {
        $this->places_roompublic = $places_roompublic;

        return $this;
    }

    public function getPriceRoompublic(): ?string
    {
        return $this->price_roompublic;
    }

    public function setPriceRoompublic(string $price_roompublic): self
    {
        $this->price_roompublic = $price_roompublic;

        return $this;
    }

    public function getDisponible(): ?bool
    {
        return $this->Disponible;
    }

    public function setDisponible(bool $Disponible): self
    {
        $this->Disponible = $Disponible;

        return $this;
    }
}
