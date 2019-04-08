# PHP设计模式练习
[![Build Status](https://travis-ci.com/qiujiafei123/DesignPatterns.svg?branch=master)](https://travis-ci.com/qiujiafei123/DesignPatterns)  

以前光对设计模式有耳闻，一直没有实践的机会，期间也看过一些博客，但是一直不知道怎么使用  
趁着最近项目不忙，可以稍微写一下demo来强化理解

## 目标
>+ 练习时候思考其应用场景
>+ 配合composer了解phpunit用法
>+ 学习写测试用例

## 目录
[创建型 (Creational)](https://github.com/qiujiafei123/DesignPatterns/tree/master/Creational)
 + :blue_book: [抽象工厂模式 (Abstract Factory)](https://github.com/qiujiafei123/DesignPatterns/tree/master/Creational/AbstractFactory)
 + :blue_book: [建造者模式 (Builder)](https://github.com/qiujiafei123/DesignPatterns/tree/master/Creational/Builder)
 + :blue_book: [工厂方法模式 (Factory Method)](https://github.com/qiujiafei123/DesignPatterns/tree/master/Creational/FactoryMethod)
 + :u7981: [多例模式 (Multiton)](https://github.com/qiujiafei123/DesignPatterns/tree/master/Creational/Multiton)
 + :blue_book: [对象池模式 (Pool)](https://github.com/qiujiafei123/DesignPatterns/tree/master/Creational/Pool)
 + :blue_book: [原型模式 (Prototype)](https://github.com/qiujiafei123/DesignPatterns/tree/master/Creational/Prototype)
 + :blue_book: [简单工厂模式 (Simple Factory)](https://github.com/qiujiafei123/DesignPatterns/tree/master/Creational/SimpleFactory)
 + :u7981: [单例模式 (Singleton)](https://github.com/qiujiafei123/DesignPatterns/tree/master/Creational/Singleton)
 + :blue_book: [静态工厂模式 (Static Factory)](https://github.com/qiujiafei123/DesignPatterns/tree/master/Creational/StaticFactory)
 
 [结构型 (Structural)](https://github.com/qiujiafei123/DesignPatterns/tree/master/Structural)
 + :orange_book: [适配器模式 (Adapter)](https://github.com/qiujiafei123/DesignPatterns/tree/master/Structural/Adapter)
 + :orange_book: [桥梁模式 (Bridge)](https://github.com/qiujiafei123/DesignPatterns/tree/master/Structural/Bridge)
 + :orange_book: [组合模式 (Composite)](https://github.com/qiujiafei123/DesignPatterns/tree/master/Structural/Composite)
 + :orange_book: [数据映射模式 (Data Mapper)](https://github.com/qiujiafei123/DesignPatterns/tree/master/Structural/DataMapper)
 + :orange_book: [装饰模式 (Decorator)](https://github.com/qiujiafei123/DesignPatterns/tree/master/Structural/Decorator)
 + :orange_book: [依赖注入模式 (Dependency Injection)](https://github.com/qiujiafei123/DesignPatterns/tree/master/Structural/DependencyInjection)
 + :orange_book: [门面模式 (Facade)](https://github.com/qiujiafei123/DesignPatterns/tree/master/Structural/Facade)
 + :orange_book: [流接口模式 (Fluent Interface)](https://github.com/qiujiafei123/DesignPatterns/tree/master/Structural/FluentInterface)
 + :orange_book: [享元模式 (Flyweight)](https://github.com/qiujiafei123/DesignPatterns/tree/master/Structural/Flyweight)
 + :orange_book: [代理模式 (Proxy)](https://github.com/qiujiafei123/DesignPatterns/tree/master/Structural/Proxy)
 + :orange_book: [注册模式 (Registry)](https://github.com/qiujiafei123/DesignPatterns/tree/master/Structural/Registry)
 
 [行为型 (Behavioral)]()
 +
 +
 +
 
 [更多 (More)]()
 +
 +
 +
 


## 环境和依赖
```$xslt
php 7.3
composer 1.7.3
phpunit 8.0
```
## demo使用
在根目录运行 `composer install`  
用例在每个设计模式对应的 `Test` 文件夹   
```shell
$ ./vendor/bin/phpunit Creational/AbstractFactory/Tests/AbstractFactoryTest.php 
PHPUnit 8.0.6 by Sebastian Bergmann and contributors.

..                                                                  2 / 2 (100%)

Time: 130 ms, Memory: 4.00 MB

OK (2 tests, 2 assertions)

```

## 参考
+ [PHP 设计模式全集 2018](https://learnku.com/docs/php-design-patterns/2018)
+ [domnikl/DesignPatternsPHP](https://github.com/domnikl/DesignPatternsPHP)