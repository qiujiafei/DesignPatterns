<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/21 4:55 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Behavioral\NullObject;
 class NullLogger implements LoggerInterface
 {
     public function log(string $str)
     {
         // 什么也不用做
     }
 }