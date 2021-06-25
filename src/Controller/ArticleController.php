<?php



namespace App\Controller;



use App\Entity\Articles;
use App\Repository\ArticlesRepository;




use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;



use Symfony\Component\HttpFoundation\Request;



class ArticleController extends AbstractController

{
    // Affichage de tous les articles
    #[Route('/article', name: 'articles')]

    public function index(): Response

    {

        $articles = $this->getDoctrine()->getRepository(Articles::class)->findAll();
        return $this->render('article/index.html.twig', [

            'articles' => $articles

        ]);

    }


    // Affichage des details de chaque article
    /**

     * @param int $id

     * @Route("/article/single/{id}", name="article")

     */

    public function article ($id)

    {

        $article = $this->getDoctrine()->getRepository(Articles::class)->find($id);

        return $this->render("article/single.html.twig", [

            "article" => $article

        ]);

    }



}