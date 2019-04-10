<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/10 6:21 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Structural\Registry\Tests;

use DesignPatterns\Structural\Registry\Registry;
use PHPUnit\Framework\TestCase;

class RegistryTest extends TestCase
{
    /**
     * 为什么先验证get
     * 因为后面会set这个常量进内存
     * 在此运行隔离进程，防止前面的进程被设置，导致测试无法运行
     * 这就是为什么你应该实现依赖注入
     * 因为注入类会很容易被测试单元替代
     */
    public function testThrowsExceptionWhenTryingToGetNotSetKey()
    {
        $this->expectException(\InvalidArgumentException::class);
        Registry::get(Registry::LOGGER);
    }


    public function testSetAndGetLogger()
    {
        $key = Registry::LOGGER;
        $logger = new \stdClass();

        Registry::set($key, $logger);
        $storedLogger = Registry::get($key);

        $this->assertSame($logger, $storedLogger);
        $this->assertInstanceOf(\stdClass::class, $storedLogger);
    }

    public function testThrowsExceptionWhenTryingToSetInvalidKey()
    {
        $this->expectException(\InvalidArgumentException::class);
        Registry::set('foobar', new \stdClass());
    }

}