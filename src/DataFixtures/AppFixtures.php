<?php

namespace App\DataFixtures;

use App\Entity\Fruit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        for ($i = 0; $i < 7; $i++) {
            $fruit = new Fruit();
            $fruit->setName("Fruittas Bananas");
            $fruit->setPoids(rand(1,30));
            $fruit->setCalibre(rand(1,10));
            $manager->persist($fruit);
        }

        $manager->flush();
    }
}
