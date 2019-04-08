<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/8 10:37 AM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */

namespace DesignPatterns\Creational\FactoryMethod;


interface LoggerFactory
{
    public function createLogger(): Logger;
}