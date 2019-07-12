# 中介者模式 (Mediator)

### 目的
本模式提供了一种轻松的多组件之间弱耦合的协同方式。如果你有个 “情报中心”，观察者模式也是个好选择，类似于控制器（并非 MVC 意义上的控制器）。

所有关联协同的组件（称作 `Colleague`）仅与 `MediatorInterface` 接口建立耦合，面向对象编程中这是好事，一个良友胜于有多个朋友。这是该模式的重要特性。

### UML 图
![Mediator](https://raw.githubusercontent.com/qiujiafei123/DesignPatterns/master/Image/mediator.png)
