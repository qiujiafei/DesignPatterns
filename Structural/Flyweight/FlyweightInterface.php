<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/10 10:06 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Structural\Flyweight;

interface FlyweightInterface
{
    public function render(string $extrinsicState): string;
}