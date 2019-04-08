<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/8 10:38 AM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */

namespace DesignPatterns\Creational\FactoryMethod;


class StdoutLoggerFactory implements LoggerFactory
{
    public function createLogger(): Logger
    {
        return new StdoutLogger();
    }
}