<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/8 5:51 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Structural\Facade;

class Facade
{
    /**
     * 定义操作系统接口变量
     * @var OsInterface
     */
    private $os;

    /**
     * 定义基础输入输出系统接口变量
     * @var BiosInterface
     */
    private $bios;

    /**
     * Facade constructor.
     * @param BiosInterface $bios 传入基础输入输出系统接口对象
     * @param \OsInterface $os 传入操作系统接口变量
     */
    public function __construct(BiosInterface $bios, OsInterface $os)
    {
        $this->os = $os;
        $this->bios = $bios;
    }

    /**
     * 构建基础输入输出系统执行启动方法
     */
    public function turnOn()
    {
        $this->bios->execute();
        $this->bios->waitForKeyPress();
        $this->bios->launch($this->os);
    }

    /**
     * 构建系统关闭方法
     */
    public function turnOff()
    {
        $this->os->halt();
        $this->bios->powerDown();
    }
}