<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/8 1:54 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Creational\SimpleFactory;

class SimpleFactory
{
    public function createBicycle(): Bicycle
    {
        return new Bicycle();
    }
}