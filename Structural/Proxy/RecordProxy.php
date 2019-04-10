<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/10 7:08 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Structural\Proxy;

class RecordProxy implements ProxyInterface
{
    private $_Record;

    /**
     * 这里是内部实例话对象
     * 有的博客这里会让客户端传入一个Record对象
     * 我认为不需要，因为真实的对象是对客户端隐藏的，最好只调用代理对象
     * RecordProxy constructor.
     */
    public function __construct()
    {
        if ($this->_Record === null) {
            $this->_Record = new Record();
        }

    }

    /**
     * 调用真实的record方法
     * @param string $data
     */
    public function wirte(string $data)
    {
        $this->_Record->wirte($data);
    }

    /**
     * 调用真实的record方法
     */
    public function read(): string
    {
        return $this->_Record->read();
    }
}