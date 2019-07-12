<?php
/**
 * Created by PhpStorm.
 * User: gaffey
 * Date: 19-7-12
 * Time: 下午1:54
 */
namespace DesignPatterns\Behavioral\Iterator;


class Book
{
    private $author;
    private $title;


    public function __construct(string $title, string $author)
    {
        $this->author = $author;
        $this->title = $title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthorAndTitle(): string
    {
        return $this->getTitle() . " By " . $this->getAuthor();
    }
}