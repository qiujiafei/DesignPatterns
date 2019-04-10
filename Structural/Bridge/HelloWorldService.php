<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/10 4:13 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Structural\Bridge;

class HelloWorldService extends Service
{
    public function get()
    {
        return $this->implementation->format('Hello World');
    }
}