<?php
/**
 * Created by PhpStorm.
 * User: gaffey
 * Date: 19-7-12
 * Time: 下午3:14
 */
namespace DesignPatterns\Behavioral\Mediator\System;

use DesignPatterns\Behavioral\Mediator\Colleague;

class Server extends Colleague
{
    public function process()
    {
        $data = $this->mediator->queryDatabase();

        $this->mediator->sendResponse(sprintf("Hello %s", $data));
    }
}