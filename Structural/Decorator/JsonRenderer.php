<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/8 3:48 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Structural\Decorator;

/**
 * 创建 Json 修饰者并继承抽象类 RendererDecorator
 * Class JsonRenderer
 * @package DesignPatterns\Structural\Decorator
 */
class JsonRenderer extends RendererDecorator
{
    /**
     * 对传入的渲染接口对象进行处理， 生成 JSON 数据
     * @return string
     */
    public function renderData(): string
    {
        return json_encode($this->wrappend->renderData());
    }
}