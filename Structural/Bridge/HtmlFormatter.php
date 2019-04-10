<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/10 4:08 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Structural\Bridge;

class HtmlFormatter implements  FormatterInterface
{
    public function format(string $text)
    {
        return sprintf('<p>%s</p>', $text);
    }
}