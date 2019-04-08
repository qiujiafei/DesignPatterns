<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/8 11:42 AM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Creational\Prototype;

class FooBookPrototype extends BookPrototype
{
    protected $category = 'foo';

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}