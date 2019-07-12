<?php
/**
 * Created by PhpStorm.
 * User: gaffey
 * Date: 19-7-12
 * Time: 下午1:54
 */
namespace DesignPatterns\Behavioral\Iterator;


class BookList implements \Countable, \Iterator
{
    private $books = [];

    private $currentIndex = 0;

    public function addBook(Book $book)
    {
        $this->books[] = $book;
    }

    public function removeBook(Book $needRemoveBook)
    {
        foreach ($this->books as $key => $book) {
            if ($book->getAuthorAndTitle() === $needRemoveBook->getAuthorAndTitle()) {
                unset($this->books[$key]);
            }
        }

        $this->books = array_values($this->books);
    }

    /**
     * 下面主要是实现 SPL 接口的方法
     * @return int
     */
    public function key(): int
    {
        return $this->currentIndex;
    }


    public function current(): Book
    {
        return $this->books[$this->currentIndex];
    }

    public function next()
    {
        $this->currentIndex ++;
    }

    public function rewind()
    {
        $this->currentIndex = 0;
    }

    public function valid(): bool
    {
        return isset($this->books[$this->currentIndex]);
    }

    public function count(): int
    {
        return count($this->books);
    }

}