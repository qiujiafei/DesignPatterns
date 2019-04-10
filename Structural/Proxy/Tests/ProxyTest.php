<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/10 7:18 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */

namespace DesignPatterns\Structural\Proxy\Tests;

use DesignPatterns\Structural\Proxy\RecordProxy;
use PHPUnit\Framework\TestCase;

class ProxyTest extends TestCase
{
    public function testCanUseProxy()
    {
        $proxy = new RecordProxy();
        $proxy->wirte('foobar');
        $this->assertEquals('read:foobar', $proxy->read());
    }
}