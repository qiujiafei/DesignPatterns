<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/8 11:48 AM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Creational\Prototype\Tests;

use DesignPatterns\Creational\Prototype\BarBookPrototype;
use DesignPatterns\Creational\Prototype\FooBookPrototype;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function testCanGetFooBook()
    {
        $fooPrototype = new FooBookPrototype();
        $barPrototype = new BarBookPrototype();

        for ($i = 0; $i < 5 ;$i++) {
            $fooBook = clone $fooPrototype;
            $fooBook->setTitle('Foo Book No.' . $i);
            $this->assertInstanceOf(FooBookPrototype::class, $fooBook);
        }

        for ($i = 0; $i < 50 ;$i++) {
            $barBook = clone $barPrototype;
            $barBook->setTitle('Bar Book No.' . $i);
            $this->assertInstanceOf(BarBookPrototype::class, $barBook);
        }
    }

}