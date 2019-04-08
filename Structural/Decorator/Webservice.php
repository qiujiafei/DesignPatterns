<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/8 3:40 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Structural\Decorator;

/**
 * 创建 Webservice 服务类实现 RenderableInterface
 * Class Webservice
 * @package DesignPatterns\Structural\Decorator
 */
class Webservice implements RenderableInterface
{
    private $data;

    /**
     * 传入字符串格式数据
     * Webservice constructor.
     * @param string $data
     */
    public function __construct(string $data)
    {
        $this->data = $data;
    }

    /**
     * 实现 RenderableInterface 渲染接口中的 renderData() 方法
     * @return string
     */
    public function renderData(): string
    {
        return $this->data;
    }
}