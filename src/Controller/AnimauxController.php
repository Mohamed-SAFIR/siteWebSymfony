<?php

namespace App\Controller;

use App\Entity\Animaux;
use App\Repository\AnimauxRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnimauxController extends AbstractController
{
    //Affichage de tous les animaux
    #[Route('/animaux', name: 'animaux')]
    public function index(AnimauxRepository $animauxRepository): Response
    {
        return $this->render('animaux/index.html.twig', [
            "animaux" => $animauxRepository->findAll()
        ]);
    }



    // Affichage des details de chaque animal
    /**

     * @param int $id

     * @Route("/animaux/single/{id}", name="animal")

     */

    public function animal ($id)

    {

        $animal = $this->getDoctrine()->getRepository(Animaux::class)->find($id);

        return $this->render("animaux/single.html.twig", [

            "animal" => $animal

        ]);

    }
}

