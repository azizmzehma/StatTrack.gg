<?php

namespace App\Entity;

use App\Repository\SubscriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SubscriptionRepository::class)]
class Subscription
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    public ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Offer::class)]
    #[ORM\JoinColumn(name: "offer_id", referencedColumnName: "id")]
    public ?Offer $offer = null;


    #[ORM\Column]
    public ?int $user_id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    public ?\DateTimeInterface $start_date = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    public ?\DateTimeInterface $end_date = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->start_date;
    }

    public function setStartDate(\DateTimeInterface $start_date): self
    {
        $this->start_date = $start_date;
        $this->calculateEndDate();

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->end_date;
    }

    public function setEndDate(\DateTimeInterface $end_date ,$start_date, $duration): self
    {
        $this->end_date = $end_date;
        $end_date = clone $start_date;
        $end_date->modify("+{$duration} day");

        return $this;
    }

    public function getOffer(): ?Offer
    {
        return $this->offer;
    }

    public function setOffer(?Offer $offer): self
    {
        $this->offer = $offer;
        $this->calculateEndDate();

        return $this;
    }

    public function getDuration(): ?int
    {
        return $this->offer ? $this->offer->getDuration() : null;
    }

    private function calculateEndDate(): void
    {
        if ($this->start_date && $this->offer && $this->offer->getDuration()) {
            $this->end_date = (clone $this->start_date)->modify('+' . $this->offer->getDuration() . ' months');
        }
    }
}

