<?php
/**
 * Created by PhpStorm.
 * User: Gaffey
 * Date: 2019/4/8 5:39 PM
 * Email: 253896514@qq.com
 * Github: https://github.com/qiujiafei123
 */
namespace DesignPatterns\Structural\DependencyInjection;

class DatabaseConnection
{
    /**
     * 参数对象
     * @var DatabaseConfiguration
     */
    private $configuration;

    public function __construct(DatabaseConfiguration $config)
    {
        $this->configuration = $config;
    }

    public function getDsn()
    {
        //这里仅仅是演示，而不是一个真正的 DSN
        //注意，这里只使用了注入的配置。
        //所以， 这里是关键的分离关注点
        return sprintf(
            '%s:%s@%s:%d',
            $this->configuration->getUsername(),
            $this->configuration->getPassword(),
            $this->configuration->getHost(),
            $this->configuration->getPort()
        );
    }
}