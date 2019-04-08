<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/8 10:39 AM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */

namespace DesignPatterns\Creational\FactoryMethod;


class FileLoggerFactory implements LoggerFactory
{
    private $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function createLogger(): Logger
    {
        return new FileLogger($this->filePath);
    }
}