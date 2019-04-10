<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/10 7:24 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Structural\Proxy;

interface ProxyInterface
{
    public function wirte(string $data);

    public function read();
}