<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/10 5:35 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Structural\DataMapper\Tests;

use DesignPatterns\Structural\DataMapper\StorageAdapter;
use DesignPatterns\Structural\DataMapper\User;
use DesignPatterns\Structural\DataMapper\UserMapper;
use PHPUnit\Framework\TestCase;

class  DataMapperTest extends TestCase
{

    public function testCanMapUserFromStorage()
    {
        $storage = new StorageAdapter([1 => ['username' => 'gaffey', 'email' => '253896514@qq.com']]);
        $userMapper = new UserMapper($storage);
        $this->assertInstanceOf(User::class, $userMapper->findById(1));
    }

    public function testWillNotMapInvalidData()
    {
        $this->expectException(\InvalidArgumentException::class);
        $storage = new StorageAdapter([]);
        $mapper = new UserMapper($storage);

        $mapper->findById(1);
    }
}