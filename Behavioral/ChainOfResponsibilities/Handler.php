<?php
/**
 * Created by PhpStorm.
 * User: gaffey
 * Date: 19-7-11
 * Time: 下午5:46
 */
namespace DesignPatterns\Behavioral\ChainOfResponsibilities;

use Psr\Http\Message\RequestInterface;

abstract class Handler
{
    /**
     * 创建处理器抽象类 Handler
     * @var null
     */
    private $successor = null;

    /**
     * 输入集成处理器对象
     * Handler constructor.
     * @param Handler $handler
     */
    public function __construct(Handler $handler = null)
    {
        $this->successor = $handler;
    }

    /**
     * 通过使用模板方法模式这种方法可以确保每个子类不会忽略调用继
     * 承。
     *
     * @param RequestInterface $request
     * 定义处理请求方法。
     *
     * @return string|null
     */
    final public function handle(RequestInterface $request)
    {
        $process = $this->processing($request);

        if ($process === null) {
            //请求尚未被目前的处理器处理 => 传递到下一个处理器
            if ($this->successor !== null) {
                $process = $this->successor->processing($request);
            }
        }

        return $process;
    }

    /**
     * 声明处理方法
     * @param RequestInterface $request
     * @return mixed
     */
    abstract protected function processing(RequestInterface $request);
}