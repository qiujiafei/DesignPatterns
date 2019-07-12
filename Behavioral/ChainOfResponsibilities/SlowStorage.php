<?php
/**
 * Created by PhpStorm.
 * User: gaffey
 * Date: 19-7-11
 * Time: 下午5:58
 */
namespace DesignPatterns\Behavioral\ChainOfResponsibilities;

 use Psr\Http\Message\RequestInterface;

 class SlowStorage extends Handler
 {
     /**
      * 直接返回 hello world 来模拟慢速的查询操作
      * @param RequestInterface $request
      * @return mixed|string
      */
     protected function processing(RequestInterface $request)
     {
         return "Hello World";
     }
 }