<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/10 7:07 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Structural\Proxy;

class Record implements ProxyInterface
{
    private $data = '';

    public function wirte(string $data)
    {
        $this->data = $data;
    }

    public function read(): string
    {
        return 'read:'.$this->data;
    }

}