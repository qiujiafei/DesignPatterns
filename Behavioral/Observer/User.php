<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/21 5:10 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Behavioral\Observer;

use SplObserver;

class User implements \SplSubject
{
    private $email;

    private $observer;

    public function __construct()
    {
        $this->observer = new \SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        $this->observer->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observer->detach($observer);
    }

    public function notify()
    {
        foreach ($this->observer as $observer) {
            $observer->update($this);
        }
    }

    public function changeEmail(string $email)
    {
        $this->email = $email;
        $this->notify();
    }
}