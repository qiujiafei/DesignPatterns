<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/15 3:26 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Behavioral\Command;

/**
 * 调用者使用这种命令
 * 一个在 SF2 中的应用
 * Class Invoker
 * @package DesignPatterns\Behavioral\Command
 */
class Invoker
{
    private $command;

    public function setCommand(CommandInterface $cmd)
    {
        $this->command = $cmd;
    }

    public function run()
    {
        $this->command->execute();
    }
}