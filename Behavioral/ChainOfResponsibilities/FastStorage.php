<?php
/**
 * Created by PhpStorm.
 * User: gaffey
 * Date: 19-7-11
 * Time: 下午5:58
 */
namespace DesignPatterns\Behavioral\ChainOfResponsibilities;

 use Psr\Http\Message\RequestInterface;

 class FastStorage extends Handler
 {
     private $data;

     public function __construct(array $data, Handler $handler)
     {
         parent::__construct($handler);
         $this->data = $data;
     }

     /**
      * 传入请求类对象参数
      * 返回缓存中对应路径存储的数据
      * @param RequestInterface $request
      * @return mixed|null
      */
     protected function processing(RequestInterface $request)
     {
         $key = sprintf(
             "%s?%s",
             $request->getUri()->getPath(),
             $request->getUri()->getQuery()
         );

         if ($request->getMethod() == "GET" && isset($this->data[$key])) {
             return $this->data[$key];
         }

         return null;
     }
 }