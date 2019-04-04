<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/4 6:20 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Creational\AbstractFactory;

abstract class Text
{
    private $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }
}