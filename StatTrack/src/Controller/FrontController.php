<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\TournamentRepository;
use App\Repository\MmatchRepository;
use App\Entity\Tournament;

class FrontController extends AbstractController
{
    #[Route('/front', name: 'app_front')]
    public function index(): Response
    {
        return $this->render('front.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }


    
  

    #[Route('/front/tournament', name: 'fronttournament')]
    public function front_tournament(TournamentRepository $tournamentRepository): Response
    {
        return $this->render('front/tournament.html.twig', [
            'tournaments' => $tournamentRepository->findAll(),
        ]);
    }

    #[Route('/front/tournament/show/{id}', name: 'front_show_tournament', methods: ['GET'])]
    public function front_tournament_show(Tournament $tournament, MmatchRepository $mmatchRepository): Response
    {
        $data = $mmatchRepository->findBy(['tournament' => $tournament]);
        return $this->render('front/showtournament.html.twig', [
            'tournament' => $tournament,
            'matchlist' => $data,
        ]);
    }
}
