<?php

namespace App\DataFixtures;

use App\Entity\Book;
use App\Entity\Review;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ReviewFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $book1 = new Book();
        $book1
            ->setIsbn("9781854114594")
            ->setTitle("Qwerty")
            ->setDescription("Qwerty woah !")
            ->setAuthor("Groves, Paul")
            ->setPublicationDate(new \DateTime("2015-04-18"))
        ;
        $manager->persist($book1);

        $review1 = new Review();
        $review1
            ->setRating(4)
            ->setBody("Goooood !")
            ->setAuthor("Sébastien Vallet")
            ->setPublicationDate(new \DateTime('now'))
            ->setBook($book1)
        ;
        $manager->persist($review1);

        $manager->flush();
    }
}
