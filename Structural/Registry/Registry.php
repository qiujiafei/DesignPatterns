<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/10 6:12 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Structural\Registry;

/**
 * 创建注册表抽象类
 * Class Registry
 * @package DesignPatterns\Structural\Registry
 */
abstract class Registry
{
    const LOGGER = 'logger';

    /**
     * 这里将在你的应用中引入全局状态， 但是不可以被模拟测试
     * 因此被视作一种反抗模式！ 使用依赖注入进行替换
     * @var array 定义储存值数组
     */
    private static $storedValues = [];

    /**
     * 定义合法键名数组
     * 可在此定义用户名唯一性
     * @var array
     */
    private static $allowedKeys = [
        self::LOGGER
    ];

    /**
     * 设置键值， 并保存进 $storeValues
     * 可视作保存密码
     * @param string $key
     * @param $val
     */
    public static function set(string $key, $val)
    {
        if (!in_array($key, self::$allowedKeys)) {
            throw new \InvalidArgumentException('Invalid key given');
        }

        self::$storedValues[$key] = $val;
    }

    /**
     * 定义获取方法，获取已储存的对应键的值
     * 可视作验证用户环节，检查用户名是否存在，返回密码， 后续验证密码正确性
     * @param string $key
     * @return mixed
     */
    public static function get(string $key)
    {
        if (!in_array($key, self::$allowedKeys) || !isset(self::$storedValues[$key])) {
            throw new \InvalidArgumentException('Invalid key given');
        }

        return self::$storedValues[$key];
    }
}