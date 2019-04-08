<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/8 11:07 AM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Creational\Pool;

class StringReverseWorker
{
    private $createdAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    public function run (string $text)
    {
        return strrev($text);
    }
}