<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/8 11:42 AM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Creational\Prototype;

abstract class BookPrototype
{
    protected $title;

    protected $category;

    abstract public function __clone();

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }
}