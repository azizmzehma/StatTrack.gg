<?php

namespace App\Controller;

use App\Entity\Mmatch;  
use App\Form\MmatchformType;
use Doctrine\Persistence\ManagerRegistry as PersistenceManagerRegistry;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function index(PersistenceManagerRegistry $doctrine): Response
    {
        $data=$doctrine->getRepository(Mmatch::class)->findAll();
           
        return $this->render('main/index.html.twig', [
            'matchlist'=>$data
        ]);
    }

    /**
     * @route("create",name="create")
     */
    public function create(Request $request, PersistenceManagerRegistry $doctrine)
    {
        $mmatch= new Mmatch();
        $form= $this->createForm(MmatchformType::class, $mmatch);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            
            $em = $doctrine->getManager();
            $em->persist($mmatch);
            $em->flush();

            $this->addFlash('notice', 'Match added Successufully!!');
            return $this->redirectToRoute('app_main');
        }
        return $this->render('main/creatematch.htm.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @route("/update/{id}",name="update")
     */
    public function update(Request $request, PersistenceManagerRegistry $doctrine, $id)
    {
        $mmatch= $doctrine->getRepository(Mmatch::class)->find($id);
        $form= $this->createForm(MmatchformType::class, $mmatch);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $em = $doctrine->getManager();
            $em->persist($mmatch);
            $em->flush();

            $this->addFlash('notice', 'Match updated Successufully!!');
            return $this->redirectToRoute('app_main');
        }
        return $this->render('main/updatematch.htm.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @route("/delete/{id}",name="delete")
     */
    public function delete($id, PersistenceManagerRegistry $doctrine){
        $data= $doctrine->getRepository(Mmatch::class)->find($id);
        $em = $doctrine->getManager();
        $em->remove($data);
        $em->flush();

        $this->addFlash('notice', 'Match Deleted Successufully!!');
        return $this->redirectToRoute('app_main');


    }
}
