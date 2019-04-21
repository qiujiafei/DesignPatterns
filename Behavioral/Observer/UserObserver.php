<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/21 5:10 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Behavioral\Observer;

use SplSubject;

class UserObserver implements \SplObserver
{
    private $changedUsers = [];

    public function update(SplSubject $subject)
    {
        $this->changedUsers[] = clone $subject;
    }

    public function getChangedUsers(): array
    {
        return $this->changedUsers;
    }
}