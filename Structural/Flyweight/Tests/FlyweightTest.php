<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/10 10:18 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Structural\Flyweight\Tests;

use DesignPatterns\Structural\Flyweight\FlyweightFactory;
use PHPUnit\Framework\TestCase;

class FlyweightTest extends TestCase
{
    private $characters = [
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
        'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'
    ];

    private $fonts = [
        'Arial', 'Times New Roman', 'Verdana', 'Helvetica'
    ];

    public function testFlyweight()
    {
        $factory = new FlyweightFactory();

        foreach ($this->characters as $character) {
            foreach ($this->fonts as $font) {
                $flyweight = $factory->get($character);
                $render = $flyweight->render($font);

                $this->assertEquals(sprintf('Character %s with font %s', $character, $font), $render);
            }
        }
    }
}