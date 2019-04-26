<?php
/**
 * Created by PhpStorm.
 * User: gaffey
 * Date: 19-4-26
 * Time: 下午4:53
 */
namespace DesignPatterns\Behavioral\State;

class ContextOrder extends StateOrder
{
    public function getState():StateOrder
    {
        return static::$state;
    }

    public function setState(StateOrder $state)
    {
        static::$state = $state;
    }

    public function done()
    {
        static::$state->done();
    }

    public function getStatus(): string
    {
        return static::$state->getStatus();
    }
}