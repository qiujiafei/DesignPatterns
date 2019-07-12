# 观察者模式 (Observer)

### 目的
当对象的状态发生变化时，所有依赖于它的对象都得到通知并被自动更新。它使用的是低耦合的方式。

### 示例
+ 使用观察者模式观察消息队列在 GUI 中的运行情况。

### 注意
PHP 已经定义了 2 个接口用于快速实现观察者模式：`SplObserver` 和 `SplSubject`。


### UML 图
![Observer](https://raw.githubusercontent.com/qiujiafei123/DesignPatterns/master/Image/observer.png)
