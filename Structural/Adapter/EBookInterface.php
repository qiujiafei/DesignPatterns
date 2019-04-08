<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/8 3:10 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */

namespace DesignPatterns\Structural\Adapter;


interface EBookInterface
{
    public function unlock();

    public function pressNext();

    /**
     * 返回当前页和总页数， 像 [10, 100] 是总页数 100 中的第 10 页
     *
     * @return array
     */
    public function getPage(): array;
}