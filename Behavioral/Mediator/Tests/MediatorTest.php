<?php
/**
 * Created by PhpStorm.
 * User: gaffey
 * Date: 19-7-12
 * Time: 下午3:49
 */
namespace DesignPatterns\Behavioral\Mediator\Tests;

use DesignPatterns\Behavioral\Mediator\Mediator;
use DesignPatterns\Behavioral\Mediator\System\Client;
use DesignPatterns\Behavioral\Mediator\System\Database;
use DesignPatterns\Behavioral\Mediator\System\Server;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{
    public function testOutputHelloWorld()
    {
        $client = new Client();

        $client->setMediator(new Mediator(new Database(), $client, new Server())) ;

        $this->expectOutputString('Hello World');
        $client->request();
    }
}