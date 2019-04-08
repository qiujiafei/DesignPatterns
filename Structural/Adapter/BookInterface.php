<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/8 3:09 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */

namespace DesignPatterns\Structural\Adapter;


interface BookInterface
{
    public function open();

    public function turnPage();

    public function getPage(): int;
}