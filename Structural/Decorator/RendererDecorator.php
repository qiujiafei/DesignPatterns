<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/8 3:44 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Structural\Decorator;

/**
 * 装饰者必须实现渲染接口类 RenderableInterface 契约， 这是该设计模式的关键点
 * 否则， 这将不是一个装饰者而只是一个自欺欺人的包装。
 *
 * Class RendererDecorator 创建抽象类 RendererDecorator (渲染器装饰者) 实现渲染接口
 * @package DesignPatterns\Structural\Decorator
 */
abstract class RendererDecorator implements RenderableInterface
{
    /**
     * @var RenderableInterface
     * 定义渲染接口变量
     */
    protected $wrappend;

    /**
     * RendererDecorator constructor.
     * @param RenderableInterface $renderer
     * 传入渲染接口类对象 $renderer
     */
    public function __construct(RenderableInterface $renderer)
    {
        $this->wrappend = $renderer;
    }
}