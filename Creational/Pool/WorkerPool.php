<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/8 11:07 AM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Creational\Pool;

class WorkerPool implements \Countable
{
    /**
     * 占用的对象池
     * @var array
     */
    private $occupiedWorkers = [];

    /**
     * 还未被使用的对象池
     * @var array
     */
    private $freeWorkers = [];

    public function get(): StringReverseWorker
    {
        //如果空闲的对象池为空，则直接 new 一个新对象
        //反之 则从空闲的对象池 弹出一个
        if (count($this->freeWorkers) == 0) {
            $worker = new StringReverseWorker();
        } else {
            $worker = array_pop($this->freeWorkers);
        }
        //将新建的对象加入到被占用的对象池数组
        $this->occupiedWorkers[spl_object_hash($worker)] = $worker;

        return $worker;
    }

    public function dispose(StringReverseWorker $worker)
    {
        $key = spl_object_hash($worker);

        if (isset($this->occupiedWorkers[$key])) {
            unset($this->occupiedWorkers[$key]);
            $this->freeWorkers[$key] = $worker;
        }
    }

    public function count(): int
    {
        return count($this->freeWorkers) + count($this->occupiedWorkers);
    }
}