<?php

namespace App\Entity;

use App\Repository\RoomRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RoomRepository::class)]
class Room
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column()]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Country = null;

    #[ORM\Column(length: 255)]
    private ?string $town = null;

    #[ORM\OneToMany(mappedBy: 'hotel', targetEntity: BedRoom::class)]
    private Collection $bedRooms;

    public function __construct()
    {
        $this->bedRooms = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCountry(): ?string
    {
        return $this->Country;
    }

    public function setCountry(string $Country): self
    {
        $this->Country = $Country;

        return $this;
    }

    public function getTown(): ?string
    {
        return $this->town;
    }

    public function setTown(string $town): self
    {
        $this->town = $town;

        return $this;
    }

    /**
     * @return Collection<int, BedRoom>
     */
    public function getBedRooms(): Collection
    {
        return $this->bedRooms;
    }


    public function addBedRoom(BedRoom $bedRoom): self
    {
        if (!$this->bedRooms->contains($bedRoom)) {
            $this->bedRooms[] = $bedRoom;
            $bedRoom->setHotel($this);
        }

        return $this;
    }
    public function __toString()
    {
        return $this->town;
    }

    public function removeBedRoom(BedRoom $bedRoom): self
    {
        if ($this->bedRooms->removeElement($bedRoom)) {
            // set the owning side to null (unless already changed)
            if ($bedRoom->getHotel() === $this) {
                $bedRoom->setHotel(null);
            }
        }

        return $this;
    }
}
