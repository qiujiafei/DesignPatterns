<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/8 5:51 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Structural\Facade;

interface OsInterface
{
    /**
     * 声明关机方法
     * @return mixed
     */
    public function halt();

    /**
     * 声明获取名称方法。返回字符串格式数据
     * @return string
     */
    public function getName(): string;
}