<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/10 4:06 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Structural\Bridge;

interface FormatterInterface
{
    public function format(string $text);
}