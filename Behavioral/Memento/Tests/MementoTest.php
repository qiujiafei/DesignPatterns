<?php
/**
 * Created by PhpStorm.
 * User: gaffey
 * Date: 19-4-26
 * Time: 下午3:34
 */
namespace DesignPatterns\Behavioral\Memento\Tests;

use DesignPatterns\Behavioral\Memento\State;
use DesignPatterns\Behavioral\Memento\Ticket;
use PHPUnit\Framework\TestCase;

class MementoTest extends TestCase
{
    public function testOpenTicketsAssignAndSetBackToOpen()
    {
        $ticket = new Ticket();

        // 打开 ticket
        $ticket->open();
        $openedState = $ticket->getState();
        $this->assertEquals(State::STATE_OPENED, (string) $ticket->getState());

        $memento = $ticket->saveToMemento();

        // 分配 ticket
        $ticket->assign();
        $this->assertEquals(State::STATE_ASSIGNED, (string) $ticket->getState());

        // 现在已经恢复到已打开的状态，但需要验证是否已经克隆了当前状态作为副本
        $ticket->restoreFromMemento($memento);

        $this->assertEquals(State::STATE_OPENED, (string) $ticket->getState());
        $this->assertNotSame($openedState, $ticket->getState());
    }
}