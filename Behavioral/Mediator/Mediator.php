<?php
/**
 * Created by PhpStorm.
 * User: gaffey
 * Date: 19-7-12
 * Time: 下午3:14
 */
namespace DesignPatterns\Behavioral\Mediator;

class Mediator implements MediatorInterface
{
    private $database;
    private $client;
    private $server;

    public function __construct(System\Database $database, System\Client $client, System\Server $server)
    {
        $this->database = $database;
        $this->client = $client;
        $this->server = $server;

        $this->database->setMediator($this);
        $this->client->setMediator($this);
        $this->server->setMediator($this);
    }

    public function makeRequest()
    {
        $this->server->process();
    }

    public function queryDatabase()
    {
        return $this->database->getData();
    }

    public function sendResponse($content)
    {
        $this->client->output($content);
    }

}