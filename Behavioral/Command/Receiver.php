<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/15 3:17 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Behavioral\Command;

class Receiver
{

    private $enableDate = false;

    private $output = [];

    public function write(string $str)
    {
        if ($this->enableDate) {
            $str .= ' ['.date('Y-m-d').']';
        }

        $this->output[] = $str;
    }


    public function getOutput(): string
    {
        return join("\n", $this->output);
    }

    /**
     * 可以显示消息的时间
     */
    public function enableDate()
    {
        $this->enableDate = true;
    }

    /**
     * 禁止显示消息的时间
     */
    public function disableDate()
    {
        $this->enableDate = false;
    }
}