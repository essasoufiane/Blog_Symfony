<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    #[Route('/article', name: 'articles_index')]
    public function index(ArticleRepository $articleRepository): Response
    {


        return $this->render('article/index.html.twig', [
            "article" => $articleRepository->findAll(),
        ]);
    }
    #[Route('/article/{slug}', name: 'articles_show')]
    public function show($slug, ArticleRepository $repo)
    {

        $article = $repo->findOneBySlug($slug);
        return $this->render('article/show.html.twig', [
            "article" => $article,
        ]);
    }
}