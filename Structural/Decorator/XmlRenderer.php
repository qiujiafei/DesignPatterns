<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/8 3:46 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace  DesignPatterns\Structural\Decorator;

/**
 * 创建 Xml 修饰者并继承抽象类 RendererDecorator
 * Class XmlRenderer
 * @package DesignPatterns\Structural\Decorator
 */
class XmlRenderer extends RendererDecorator
{
    /**
     * 对传入的渲染接口对象进行处理， 生成DOM 数据文件
     * @return string
     */
    public function renderData(): string
    {
        $doc = new \DOMDocument();
        $data = $this->wrappend->renderData();
        $doc->appendChild($doc->createElement('content', $data));

        return $doc->saveXML();
    }
}