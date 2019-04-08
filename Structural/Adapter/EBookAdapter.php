<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/8 3:10 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */

namespace DesignPatterns\Structural\Adapter;


class EBookAdapter implements BookInterface
{
    protected $eBook;

    public function __construct(EBookInterface $eBook)
    {
        $this->eBook = $eBook;
    }

    /**
     * 这里将电子书的解锁操作转换成打开书本
     */
    public function open()
    {
        $this->eBook->unlock();
    }

    /**
     * 这里将电子书的滑动翻页转换成书本翻页
     */
    public function turnPage()
    {
        $this->eBook->pressNext();
    }

    /**
     * 注意这里适配器的行为： EBookInterface::getPage() 将返回两个整型，除了 BookInterface
     * 仅支持获得当前页，所以我们这里适配这个行为
     * @return int
     */
    public function getPage(): int
    {
        return $this->eBook->getPage()[0];
    }
}