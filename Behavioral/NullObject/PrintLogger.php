<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/21 4:54 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Behavioral\NullObject;

class PrintLogger implements LoggerInterface
{
    public function log(string $str)
    {
        echo $str;
    }
}