<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/21 4:49 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace  DesignPatterns\Behavioral\NullObject;

class Service
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function doSomething()
    {
        $this->logger->log('We are in ' . __METHOD__);
    }
}