<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/10 5:10 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Structural\DataMapper;

class User
{
    private $username;

    private $email;

    public static function fromState(array $state): User
    {
        //在你访问的时候验证状态

        return new self(
            $state['username'],
            $state['email']
        );
    }

    public function __construct(string $username, string $email)
    {
        //先验证参数再设置他们

        $this->username = $username;
        $this->email = $email;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }
}