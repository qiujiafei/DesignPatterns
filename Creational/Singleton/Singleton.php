<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/8 2:04 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Creational\Singleton;

final class Singleton
{

    private static $instanse;

    public static function getInstanse(): Singleton
    {
        if (null === static::$instanse) {
            static::$instanse = new static();
        }

        return static::$instanse;
    }

    /**
     * 不允许从外部调用以防止创建多个实例
     * Singleton constructor.
     */
    private function __construct()
    {
    }


    /**
     * 防止克隆 (这会创建实例的副本)
     */
    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

    /**
     * 防止反序列化 (这将创建它的副本)
     */
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }
}