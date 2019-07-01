<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RoomPrivateRepository")
 */
class RoomPrivate
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
     * @ORM\Column(type="string", length=255)
     */
    private $img_roomprivate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $places_roomprivate;

    /**
     * @ORM\Column(type="text")
     */
    private $content_roomprivate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $price_roomprivate;

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

    public function getImgRoomprivate(): ?string
    {
        return $this->img_roomprivate;
    }

    public function setImgRoomprivate(string $img_roomprivate): self
    {
        $this->img_roomprivate = $img_roomprivate;

        return $this;
    }

    public function getPlacesRoomprivate(): ?string
    {
        return $this->places_roomprivate;
    }

    public function setPlacesRoomprivate(string $places_roomprivate): self
    {
        $this->places_roomprivate = $places_roomprivate;

        return $this;
    }

    public function getContentRoomprivate(): ?string
    {
        return $this->content_roomprivate;
    }

    public function setContentRoomprivate(string $content_roomprivate): self
    {
        $this->content_roomprivate = $content_roomprivate;

        return $this;
    }

    public function getPriceRoomprivate(): ?string
    {
        return $this->price_roomprivate;
    }

    public function setPriceRoomprivate(string $price_roomprivate): self
    {
        $this->price_roomprivate = $price_roomprivate;

        return $this;
    }
}
