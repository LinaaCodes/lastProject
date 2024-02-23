<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $products =[];

        for ($i = 0; $i < 10; $i++) {

            $products[$i] = new Product();

            $products[$i]->setPrice("$i");

            $products[$i]->setDecript("pomme ". $i ." rouge");

            $products[$i]->setUrlimg("https://wordpress.potagercity.fr/wp-content/uploads/2019/03/article-pomme-belle-a-croquer-5bc091e457e9a.jpg");



            $manager->persist($products[$i]);
        }

        
        

        $manager->flush();
    }
}
