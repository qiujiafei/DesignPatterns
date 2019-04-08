<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/8 10:54 AM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Creational\Multiton;

final class Multiton
{
    const INSTANCE_1 = '1';
    const INSTANCE_2 = '2';

    /**
     * 实例数组
     * @var array
     */
    private static $instances = [];

    /**
     * 这里私有方法阻止用户随意创建该对象
     * Multiton constructor.
     */
    private function __construct()
    {

    }

    public static function getInstance(string $instanceName): Multiton
    {
        if (!isset(self::$instances[$instanceName])) {
            self::$instances[$instanceName] = new self();
        }

        return self::$instances[$instanceName];

    }

    /**
     * 该私有对象阻止被克隆
     */
    private function __clone()
    {

    }

    /**
     * 该私有方法阻止实例被序列化
     */
    private function __wakeup()
    {

    }

}