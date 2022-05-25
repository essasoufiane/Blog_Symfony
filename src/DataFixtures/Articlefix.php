<?php

namespace App\DataFixtures;

use App\Entity\Article;
use DateTime;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class Articlefix extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        
        for ($i=0; $i < 10 ; $i++) { 
            $article = new Article();
            $article->setTitle("angular");
            $article->setIntro("cest tropp cool");
            $article->setContent("très sympa comme framworks mais il faut avoir les bases");
            $article->setImage("https://picsum.photos/300");
            $article->setCreatedAt(new DateTime());
            $manager->persist($article);
            
        }

        $manager->flush();
    }
}
