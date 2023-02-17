<?php

namespace App\Entity;

use App\Repository\MmatchRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: MmatchRepository::class)]
class Mmatch
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "team 1 can't be blank")]
    #[Assert\Length(max:10,maxMessage : "taill")]
    private ?string $team1name = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(["message" => "Team  2 can't be blank"])]
    private ?string $team2name = null;

    #[CustomAssert\TeamwinerIsOneOfTeams]
    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(["message" => "Team can't be blank"])]
    private ?string $teamwiner = null;

   
    #[ORM\Column(length: 255)]
   #[Assert\NotBlank(["message" => "game can't be blank"])]
    private ?string $game = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $matchtime = null;

    #[ORM\ManyToOne(inversedBy: 'matches')]
    private ?Tournament $tournament = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTeam1name(): ?string
    {
        return $this->team1name;
    }

    public function setTeam1name(string $team1name): self
    {
        $this->team1name = $team1name;

        return $this;
    }

    public function getTeam2name(): ?string
    {
        return $this->team2name;
    }

    public function setTeam2name(string $team2name): self
    {
        $this->team2name = $team2name;

        return $this;
    }

    public function getTeamwiner(): ?string
    {
        return $this->teamwiner;
    }

    public function setTeamwiner(string $teamwiner): self
    {
        $this->teamwiner = $teamwiner;

        return $this;
    }

    public function getGame(): ?string
    {
        return $this->game;
    }

    public function setGame(string $game): self
    {
        $this->game = $game;

        return $this;
    }

    public function getMatchtime(): ?\DateTimeInterface
    {
        return $this->matchtime;
    }

    public function setMatchtime(\DateTimeInterface $matchtime): self
    {
        $this->matchtime = $matchtime;

        return $this;
    }

    public function getTournament(): ?Tournament
    {
        return $this->tournament;
    }

    public function setTournament(?Tournament $tournament): self
    {
        $this->tournament = $tournament;

        return $this;
    }
}
