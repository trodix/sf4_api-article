<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReviewRepository")
 * @ApiResource(normalizationContext={"groups"={"review"}})
 */
class Review
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"book", "review"})
     * 
     */
    private $id;

    /**
     * @ORM\Column(type="smallint")
     * @Assert\Range(min=0, max=5)
     * @Groups({"book", "review"})
     * 
     */
    private $rating;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank
     * @Groups({"book", "review"})
     * 
     */
    private $body;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Groups({"book", "review"})
     * 
     */
    private $author;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\NotNull
     * @Groups({"book", "review"})
     * 
     */
    private $publicationDate;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Book", inversedBy="reviews")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotNull
     * @Groups("review")
     * 
     */
    private $book;

    public function getId()
    {
        return $this->id;
    }

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(int $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    public function getBody(): ?string
    {
        return $this->body;
    }

    public function setBody(string $body): self
    {
        $this->body = $body;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getPublicationDate(): ?\DateTimeInterface
    {
        return $this->publicationDate;
    }

    public function setPublicationDate(\DateTimeInterface $publicationDate): self
    {
        $this->publicationDate = $publicationDate;

        return $this;
    }

    public function getBook(): ?Book
    {
        return $this->book;
    }

    public function setBook(?Book $book): self
    {
        $this->book = $book;

        return $this;
    }
}
