<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/10 5:08 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Structural\DataMapper;

class StorageAdapter
{
    private $data = [];

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function find(int $id)
    {
        if (isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }
}