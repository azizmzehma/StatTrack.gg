<?php

namespace App\Controller;

use App\Entity\Subscription;
use App\Form\SubscriptionType;
use Doctrine\Persistence\ManagerRegistry as PersistenceManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SubscriptionController extends AbstractController
{
    #[Route('/Subscription', name: 'app_subscription')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $subscriptions = $entityManager->getRepository(Subscription::class)->findAll();

        return $this->render('Subscription/index.html.twig', ['subscriptions' => $subscriptions]);
    }

    #[Route('/add_subscription', name: 'add_subscription')]
    public function add_subscription(Request $request, EntityManagerInterface $entityManager): Response
    {
        $sub = new Subscription();
        $sub->setStartDate(new \DateTime()); // set the start date to the current date and time
        $form = $this->createForm(SubscriptionType::class,$sub);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $entityManager->persist($sub);
            $entityManager->flush();

            return $this->redirectToRoute('app_subscription');
        }

        return $this->render('subscription/createSubscription.html.twig',['form'=>$form->createView()] );
    }




    #[Route('/delete_subscription/{id}', name: 'delete_subscription')]
    public function delete_subscription(Request $request, EntityManagerInterface $entityManager, $id): Response
    {
        $subscription = $entityManager->getRepository(Subscription::class)->find($id);

        if (!$subscription) {
            throw $this->createNotFoundException('No subscription found for id '.$id);
        }

        $entityManager->remove($subscription);
        $entityManager->flush();
        $this->addFlash('success', 'The subscription has been deleted successfully.');
        return $this->redirectToRoute('app_subscription');
    }

    #[Route('/edit_subscription/{id}', name: 'edit_subscription')]
    public function edit_subscription(Request $request, $id, EntityManagerInterface $entityManager): Response
    {

        $subscription = $entityManager->getRepository(Subscription::class)->find($id);
        $subscription->setStartDate(new \DateTime()); // set the start date to the current date and time

        $form = $this->createForm(SubscriptionType::class, $subscription);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_subscription');
        }

        return $this->render('subscription/editSubscription.html.twig', [
            'form' => $form->createView(),
        ]);
    }



}
