<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/8 3:38 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Structural\Decorator;

interface RenderableInterface
{
    /**
     * 创建渲染接口
     * 这里的装饰方法 renderData() 返回的是字符串格式数据
     * @return string
     */
    public function renderData(): string;
}