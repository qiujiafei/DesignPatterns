<?php
/**
 * Created by PhpStorm.
 * User: gaffey
 * Date: 19-7-12
 * Time: 下午2:07
 */
namespace DesignPatterns\Behavioral\Iterator;

use PHPUnit\Framework\TestCase;

class IteratorTest extends TestCase
{
    public function testCanIterateOverBookList()
    {
        $bookList = new BookList();
        $bookList->addBook(new Book('Learning PHP Design Patterns', 'William Sanders'));
        $bookList->addBook(new Book('三体', '刘慈欣'));
        $bookList->addBook(new Book('西游记', '吴承恩'));

        $books = [];

        foreach ($bookList as $book) {
            $books[] = $book->getAuthorAndTitle();
        }

        $assumeResult = [
            'Learning PHP Design Patterns By William Sanders',
            '三体 By 刘慈欣',
            '西游记 By 吴承恩',
        ];

        $this->assertEquals($assumeResult, $books);
    }

    public function testCanIteratorOverBookListAfterRemovingBook()
    {
        $book1 = new Book('三体', '刘慈欣');
        $book2 = new Book('红楼梦', '曹雪芹');

        $bookList = new BookList();
        $bookList->addBook($book1);
        $bookList->addBook($book2);

        $bookList->removeBook($book1);

        $books = [];

        foreach($bookList as $book) {
            $books[] = $book->getAuthorAndTitle();
        }

        $this->assertEquals(['红楼梦 By 曹雪芹'], $books);
    }

    public function testCanAddBookToList()
    {
        $book = new Book('Clean Code', 'Robert C. Martin');

        $bookList = new BookList();
        $bookList->addBook($book);

        $this->assertCount(1, $bookList);
    }

    public function testCanRemoveBookFromList()
    {
        $book = new Book('Clean Code', 'Robert C. Martin');

        $bookList = new BookList();
        $bookList->addBook($book);
        $bookList->removeBook($book);

        $this->assertCount(0, $bookList);
    }
}