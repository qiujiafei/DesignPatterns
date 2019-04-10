<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/10 4:14 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Structural\Bridge\Tests;

use DesignPatterns\Structural\Bridge\HelloWorldService;
use DesignPatterns\Structural\Bridge\HtmlFormatter;
use DesignPatterns\Structural\Bridge\PlainTextFormatter;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    public function testCanPrintUsingThePlainTextPrinter()
    {
        //使用 plaintext 格式输出
        $service = new HelloWorldService(new PlainTextFormatter());
        $this->assertEquals('Hello World', $service->get());

        //使用 html 格式输出
        $service = new HelloWorldService(new HtmlFormatter());
        $this->assertEquals('<p>Hello World</p>', $service->get());
    }
}