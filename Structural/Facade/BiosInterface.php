<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/8 5:51 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Structural\Facade;

interface BiosInterface
{
    /**
     * 声明执行方法
     * @return mixed
     */
    public function execute();

    /**
     * 声明等待密码输入方法
     * @return mixed
     */
    public function waitForKeyPress();

    /**
     * 声明登陆方法
     * @param \OsInterface $os
     * @return mixed
     */
    public function launch(OsInterface $os);

    /**
     * 声明关机方法
     * @return mixed
     */
    public function powerDown();
}