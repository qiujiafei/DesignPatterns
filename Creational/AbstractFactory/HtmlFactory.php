<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/4 6:18 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Creational\AbstractFactory;

class HtmlFactory extends AbstractFactory
{
    public function createText(string $content): Text
    {
        return new HtmlText($content);
    }
}