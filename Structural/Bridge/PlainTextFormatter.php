<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/10 4:07 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Structural\Bridge;

class PlainTextFormatter implements FormatterInterface
{
    public function format(string $text)
    {
        return $text;
    }
}