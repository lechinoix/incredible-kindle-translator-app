<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuoteRepository")
 */
class Quote
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $book_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $quote_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $english_text;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $translation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBookId(): ?int
    {
        return $this->book_id;
    }

    public function setBookId(int $book_id): self
    {
        $this->book_id = $book_id;

        return $this;
    }

    public function getQuoteId(): ?int
    {
        return $this->quote_id;
    }

    public function setQuoteId(int $quote_id): self
    {
        $this->quote_id = $quote_id;

        return $this;
    }

    public function getEnglishText(): ?string
    {
        return $this->english_text;
    }

    public function setEnglishText(string $english_text): self
    {
        $this->english_text = $english_text;

        return $this;
    }

    public function getTranslation(): ?string
    {
        return $this->translation;
    }

    public function setTranslation(?string $translation): self
    {
        $this->translation = $translation;

        return $this;
    }
}
