<?php

namespace App\Controller;

use App\Entity\Fruit;
use App\Repository\FruitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'home_page')]
    public function index(EntityManagerInterface $manager, FruitRepository $repo)
    {

        $banane = new Fruit;
        $banane->setName("fin de journée");
        $banane->setPoigts(80);
        dump($banane);

        $manager->persist($banane);
        $manager->flush();
        $fruits = $repo->findAll();

        return $this->render('home/index.html.twig', [
            'fruits' => $fruits
        ]);
    }



    #[Route('/article', name: 'app_article')]
    public function article()
    {


        return $this->render('home/article.html.twig', [
 
        ]);
    }
}
