<?php
/**
 * Created by PhpStorm.
 * User: gaffey
 * Date: 19-7-12
 * Time: 下午3:15
 */
namespace DesignPatterns\Behavioral\Mediator;

interface MediatorInterface
{
    /**
     * 生成请求
     * @return mixed
     */
    public function makeRequest();

    /**
     * 返回响应
     * @param $content
     * @return mixed
     */
    public function sendResponse($content);

    /**
     * 查询数据库
     * @return mixed
     */
    public function queryDatabase();
}