<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/8 9:53 AM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Creational\Builder\Parts;

abstract class Vehicle
{
    /**
     * @var array
     */
    private $data = [];

    /**
     * @param $key
     * @param $value
     */
    public function setPart($key, $value)
    {
        $this->data[$key] = $value;
    }
}