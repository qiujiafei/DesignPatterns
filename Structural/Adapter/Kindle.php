<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/8 3:11 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */

namespace DesignPatterns\Structural\Adapter;


class Kindle implements EBookInterface
{
    private $page = 1;

    private $totalPage = 100;

    public function unlock()
    {

    }

    public function pressNext()
    {
        $this->page++;
    }

    /**
     * 返回当前页和总页数，像 [10, 100] 是总页数100中的第10页。
     * @return array
     */
    public function getPage(): array
    {
        return [$this->page, $this->totalPage];
    }
}