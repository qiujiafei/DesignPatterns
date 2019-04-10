<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/10 5:11 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Structural\DataMapper;

class UserMapper
{
    private $adapter;

    public function __construct(StorageAdapter $storage)
    {
        $this->adapter = $storage;
    }

    /**
     * 根据 id 从储存器中找到用户， 并返回一个用户对象
     * 在内存中， 通常这种逻辑将使用 Repository 模式来实现
     * 然而，重要的部分是在下面的 mapRowToUser() 中，它将从中创建一个业务对象
     * 从储存中获取的数据
     * @param int $id
     * @return User
     */
    public function findById(int $id): User
    {
        $result = $this->adapter->find($id);

        if ($result === null) {
            throw new \InvalidArgumentException("User #$id not found");
        }

        return $this->mapRowToUser($result);
    }

    private function mapRowToUser(array $row): User
    {
        return User::fromState($row);
    }
}