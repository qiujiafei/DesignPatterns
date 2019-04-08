<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/8 3:56 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Structural\Decorator\Tests;

use DesignPatterns\Structural\Decorator\JsonRenderer;
use DesignPatterns\Structural\Decorator\Webservice;
use DesignPatterns\Structural\Decorator\XmlRenderer;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    private $service;

    protected function setUp(): void
    {
        $this->service = new Webservice('foobar');
    }

    public function testJsonDecorator()
    {
        $service = new JsonRenderer($this->service);

        $this->assertEquals('"foobar"', $service->renderData());
    }

    public function testXmlDecorator()
    {
        $service = new XmlRenderer($this->service);
        $this->assertEquals(
            '<?xml version="1.0"?>'."\n<content>foobar</content>\n",
            $service->renderData());
    }
}