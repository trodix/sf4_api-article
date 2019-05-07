<?php

namespace App\DataFixtures;

use App\Entity\Book;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class BookFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $book1 = new Book();
        $book1
            ->setIsbn("9781452164342")
            ->setTitle("Game Of Thrones Tarot")
            ->setDescription("A Game Of Thrones book !")
            ->setAuthor("Liz Dean")
            ->setPublicationDate(new \DateTime("2018-05-21"))
        ;

        $manager->persist($book1);

        $book2 = new Book();
        $book2
            ->setIsbn("9788817105378")
            ->setTitle("The 100. Homecoming")
            ->setDescription("The 100. Homecoming ! whoa !")
            ->setAuthor("Kass Morgan")
            ->setPublicationDate(new \DateTime("2018-06-22"))
        ;

        $manager->persist($book2);

        $book3 = new Book();
        $book3
            ->setIsbn("9781419729386")
            ->setTitle("Flash")
            ->setDescription("Flash ! whoa !")
            ->setAuthor("Manning, Matthew K.")
            ->setPublicationDate(new \DateTime("2018-07-23"))
        ;

        $manager->persist($book3);

        $book4 = new Book();
        $book4
            ->setIsbn("9781848695047")
            ->setTitle("Tickly Octopus")
            ->setDescription("Tickly Octopus ! whoa !")
            ->setAuthor("Galloway Ruth")
            ->setPublicationDate(new \DateTime("2018-08-24"))
        ;

        $manager->persist($book4);

        $book5 = new Book();
        $book5
            ->setIsbn("9786138055679")
            ->setTitle("Azerty")
            ->setDescription("Azerty ! whoa !")
            ->setAuthor("Frederic P. Miller")
            ->setPublicationDate(new \DateTime("2011-09-25"))
        ;

        $manager->persist($book5);



        $manager->flush();
    }
}
