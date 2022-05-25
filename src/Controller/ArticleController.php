<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
    #[Route('/article', name: 'app_article')]
    public function index(ArticleRepository $repo,ArticleRepository $article)
    {
        $article = new Article();
        $article->getTitle(); 
        $article->getIntro(); 
        $article->getContent(); 
        $article->getImage(); 
        $article->getCreatedAt();
        $article= $repo->findAll();
        dump($article);
        return $this->render('article/index.html.twig', [
            'article' => $article,
        ]);
    }
}
