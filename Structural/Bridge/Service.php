<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/10 4:09 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Structural\Bridge;

abstract class Service
{
    /**
     * 定义实现属性
     * @var FormatterInterface
     */
    protected $implementation;

    /**
     * 传入 FormatterInterface 实现类对象
     * Service constructor.
     * @param FormatterInterface $printer
     */
    public function __construct(FormatterInterface $printer)
    {
        $this->implementation = $printer;
    }

    /**
     * 和构造方法一样
     * @param FormatterInterface $printer
     */
    public function setImplementation(FormatterInterface $printer)
    {
        $this->implementation = $printer;
    }

    abstract public function get();

}