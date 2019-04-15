<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/15 3:15 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Behavioral\Command;

class HelloCommand implements CommandInterface
{
    private $output;

    public function __construct(Receiver $console)
    {
        $this->output = $console;
    }

    /**
     * 执行和输出 "Hello World"
     */
    public function execute()
    {
        $this->output->write('Hello World');
    }

}