<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home_page')]
    public function index(ArticleRepository $articleRepository)
    {

        dump($articleRepository->findLastArticles(3));

        return $this->render('home/index.html.twig', [
            "articles"=> $articleRepository->findLastArticles(3)
        ]);
    }




}
