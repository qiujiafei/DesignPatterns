<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/8 1:55 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Creational\SimpleFactory;

class Bicycle
{
    public function driveTo(string $destination)
    {
        echo "drive to " . $destination;
    }
}