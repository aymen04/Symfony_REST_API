<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Book;
use Faker;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
         
         $faker = Faker\Factory::create();

         for ($i = 0; $i < 20; $i++) {
            $book = new Book;
            $book->setTitle($faker->word());
            $book->setCoverText($faker->text());
            $manager->persist($book);
        }
        $manager->flush();

       
        
    }
}
