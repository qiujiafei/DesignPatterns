<?php
/**
 * Created by PhpStorm.
 * User: gaffey
 * Date: 19-7-11
 * Time: 下午6:11
 */
namespace DesignPatterns\Behavioral\ChainOfResponsibilities\Tests;

use DesignPatterns\Behavioral\ChainOfResponsibilities\FastStorage;
use DesignPatterns\Behavioral\ChainOfResponsibilities\SlowStorage;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\UriInterface;

class ChinaTest extends TestCase
{
    private $fast;

    protected function setUp():void
    {
        $this->fast = new FastStorage(
            ['/foo/bar?index=1' => 'Hello In Fast'],
            new SlowStorage()
        );

    }

    public function testCanRequestKeyInFastStorage()
    {

        //模仿一个实现了 UriInterface 的对象
        $uri = $this->createMock(UriInterface::class);
        //假设调用 uri->getPath() 会返回 '/foo/bar'
        $uri->method('getPath')->willReturn('/foo/bar');
        //假设调用 uri->getQuery() 会返回 'index=1'
        $uri->method('getQuery')->willReturn('index=1');

        //模仿一个实现了 RequestInterface 的对象
        $request = $this->createMock(RequestInterface::class);
        //假设调用 request->getMethod() 会返回 'GET'
        $request->method('getMethod')->willReturn('GET');
        //假设调用 uri->getUri() 会返回 uri 对象
        $request->method('getUri')->willReturn($uri);

        $this->assertEquals('Hello In Fast', $this->fast->handle($request));
    }

    /**
     * 模拟从数据库中拉取数据。
     */
    public function testCanRequestKeyInSlowStorage()
    {
        $uri = $this->createMock(UriInterface::class);
        $uri->method('getPath')->willReturn('/foo/baz');
        $uri->method('getQuery')->willReturn('');

        $request = $this->createMock(RequestInterface::class);
        $request->method('getMethod')
            ->willReturn('GET');
        $request->method('getUri')->willReturn($uri);

        $this->assertEquals('Hello World', $this->fast->handle($request));
    }
}