<?php

namespace App\Controller;

use App\Entity\Articles;
use App\Repository\AnimauxRepository;
use App\Repository\ArticlesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class PanierController extends AbstractController
{
    // Affichage des deux paniers animaux et articles
    #[Route('/panier', name: 'panier')]
    public function index(SessionInterface $session, AnimauxRepository $animal, ArticlesRepository $article)
    {
        $panierAnimaux = $session->get('panierAnimal', []);
        $panierArtcile = $session->get('panierArticle', []);
        $panierWithDataAnimal = [];
        $panierWithDataArticle = [];
        $totalArticle = 0;

        // Remplir le tableau du panier animal
        foreach ($panierAnimaux as $id =>$quantity) {
            $panierWithDataAnimal[] = [
                'animal' => $animal->find($id),
                 'quantity' => $quantity
            ];
        }

        // Remplir le tableau du panier article
        foreach ($panierArtcile as $id => $quantity) {
           $panierWithDataArticle[] = [
               'article' => $article->find($id),
               'quantity' => $quantity
           ];
        }

        // Calculer la somme totale du panier article
        foreach ($panierWithDataArticle as $article) {
            $total = $article['article']->getPrice() * $article['quantity'];
            $totalArticle += $total;
        }

        // Nous renvoie vers la page index avec les tableaux du panier et la somme totale
        return $this->render('panier/index.html.twig', [
            'animaux' => $panierWithDataAnimal,
            'articles' => $panierWithDataArticle,
            'total' => $totalArticle
        ]);
    }


    // Ajouter un article au panier article
    // Si on choisit le même article plusieurs fois, on aura la quantité choisit
    /**
     * @Route("/panier/addArticle/{id}", name="panier_add_article")
     * 
     */
    public function addArticle($id, SessionInterface $session){

        $panier = $session->get('panierArticle', []);
        
        if(!empty($panier[$id])){
            $panier[$id] ++;
        }
        else{
            $panier[$id] = 1;
        }

        $session->set('panierArticle', $panier);
        return $this->redirectToRoute('articles');
    } 
    
    // Ajouter un animal au panier animaux
    // Si on choisit le même animal plusieurs fois, on aura la quantité choisit
    /**
     * @Route("/panier/addAnimal/{id}", name="panier_add_animal")
     * 
     */
    public function addAnimal($id, SessionInterface $session){

        $panier = $session->get('panierAnimal', []);
        
        if(!empty($panier[$id])){
            $panier[$id] ++;
        }
        else{
            $panier[$id] = 1;
        }

        $session->set('panierAnimal', $panier);
        return $this->redirectToRoute('animaux');
    } 


    //  Supprimer un article du panier articles
    /**
     * 
     * @Route("/panier/removeArticle/{id}", name="panier_remove_article")
     */
    public function removeArticle($id, SessionInterface $session){

        $panier = $session->get('panierArticle');

        if(!empty($panier[$id])){
           unset($panier[$id]);
        }

        $session->set('panierArticle', $panier);

        return $this->redirectToRoute('panier');

    }

    //  Supprimer un animal du panier animaux
    /**
     * 
     * @Route("/panier/removeAnimal/{id}", name="panier_remove_animal")
     */
    public function removeAnimal($id, SessionInterface $session){

        $panier = $session->get('panierAnimal');

        if(!empty($panier[$id])){
           unset($panier[$id]);
        }

        $session->set('panierAnimal', $panier);

        return $this->redirectToRoute('panier');

    }
}
