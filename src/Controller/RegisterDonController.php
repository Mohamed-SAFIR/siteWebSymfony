<?php

namespace App\Controller;

use App\Entity\Don;
use App\Form\RegisterBanqType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegisterDonController extends AbstractController
{
    // Formulaire pour faire un don
    #[Route('/registerBanq', name: 'register_don')]
    public function index(Request $request): Response
    {
        $userDon = new Don();
        $form = $this->createForm(RegisterBanqType::class, $userDon);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) { 
            $em = $this->getDoctrine()->getManager();
            $em->persist($userDon);
            $em->flush();

            return $this->render('congrat.html.twig');
        }
        return $this->render('register_don/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
