<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/8 5:43 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Structural\DependencyInjection\Tests;

use DesignPatterns\Structural\DependencyInjection\DatabaseConfiguration;
use DesignPatterns\Structural\DependencyInjection\DatabaseConnection;
use PHPUnit\Framework\TestCase;

class DependencyInjectionTest extends TestCase
{
    public function testDependencyInjection()
    {
        $config = new DatabaseConfiguration('127.0.0.1', 3306, 'root', 'root');
        $connection = new DatabaseConnection($config);

        $this->assertEquals('root:root@127.0.0.1:3306', $connection->getDsn());
    }
}