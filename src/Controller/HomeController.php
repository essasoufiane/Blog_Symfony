<?php

namespace App\Controller;

use stdClass;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'home_page')]
    public function index(): Response
    {
        $author = "soufiane";
        $article = new stdClass();
        $article->title = "theorie du complot";
        $article->intro = "facsine depuis des lustres";
        $article->content = "La terre est plate bordel !";
        $article->urgent = "je cherche un stage !";
        $age = 19;
        $tab = ["soso",18,true,'daouda','emmanuel'];

        return $this->render('home/index.html.twig', [
            "article" => $article,
            "auteur" => $author,
            "condition" => $age,
            "tab" => $tab
        ]);
    }
    #[Route('/article', name: 'app_article')]
    public function article(): Response
    {


        return $this->render('home/article.html.twig', [
 
        ]);
    }
}
