<?php

namespace App\Controller;

use Knp\Component\Pager\Pagination\PaginationInterface;
use App\Entity\Subscription;
use App\Entity\Offer;
use App\Form\OfferType;
use Doctrine\Persistence\ManagerRegistry as PersistenceManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OfferController extends AbstractController
{
    #[Route('/offer', name: 'app_offer')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $offers = $entityManager->getRepository(Offer::class)->findAll();

        return $this->render('offer/index.html.twig', ['offers' => $offers]);
    }

    #[Route('/offerfront', name: 'app_offerr')]
    public function indexfront(EntityManagerInterface $entityManager): Response
    {
        $offers = $entityManager->getRepository(Offer::class)->findAll();
        $query = $entityManager->createQueryBuilder()
            ->select('o')
            ->from(Offer::class, 'o')
            ->orderBy('o.duration', 'ASC')
            ->getQuery();

        $offers = $query->getResult();

        return $this->render('offer front/index.html.twig', ['offers' => $offers]);
    }

    #[Route('/add_offer', name: 'add_offer')]
    public function add_offer(Request $request, EntityManagerInterface $entityManager): Response
    {
        $offre = new Offer();
        $form = $this->createForm(OfferType::class,$offre);

        $form -> handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $entityManager->persist($offre);
            $entityManager->flush();

            return $this->redirectToRoute('app_offer');

        }
        return $this->render('offer/createOffer.html.twig',['f'=>$form->createView()] );

    }

    #[Route('/delete_offer/{id}', name: 'delete_offer')]
    public function delete_offer(Request $request, EntityManagerInterface $entityManager, $id): Response
    {
        $offer = $entityManager->getRepository(Offer::class)->find($id);

        if (!$offer) {
            throw $this->createNotFoundException('No offer found for id '.$id);
        }

        $entityManager->remove($offer);
        $entityManager->flush();
        $this->addFlash('success', 'The user has been deleted successfully.');
        return $this->redirectToRoute('app_offer');
    }

    #[Route('/edit_offer/{id}', name: 'edit_offer')]
    public function edit_offer(Request $request, $id, EntityManagerInterface $entityManager): Response
    {
        $offer = $entityManager->getRepository(Offer::class)->find($id);

        $form = $this->createForm(OfferType::class, $offer);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_offer');
        }

        return $this->render('offer/editOffre.html.twig', [
            'f' => $form->createView(),
        ]);
    }

}

