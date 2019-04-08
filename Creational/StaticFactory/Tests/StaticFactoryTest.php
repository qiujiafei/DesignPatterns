<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/8 2:19 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Creational\StaticFactory\Tests;

use DesignPatterns\Creational\StaticFactory\FormatNumber;
use DesignPatterns\Creational\StaticFactory\FormatString;
use DesignPatterns\Creational\StaticFactory\StaticFactory;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{
    public function testCanCreateNumberFormatter()
    {
        $this->assertInstanceOf(
            FormatNumber::class,
            StaticFactory::factory('number')
        );
    }

    public function testCanCreateStringFormatter()
    {
        $this->assertInstanceOf(
            FormatString::class,
            StaticFactory::factory('string')
        );
    }

    /**
     * 注释里的exception会被废弃，先断言，再调用方法
     */
    public function testExpectedExceptionMessage()
    {
        $this->expectException(\InvalidArgumentException::class);
        StaticFactory::factory('object');
    }
}