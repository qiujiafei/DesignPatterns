# 模板方法模式 (Template Method)

### 目的
模板方法模式是一种行为型的设计模式。

可能你已经见过这种模式很多次了。它是一种让抽象模板的子类「完成」一系列算法的行为策略。

众所周知的「好莱坞原则」：「不要打电话给我们，我们会打电话给你」。这个类不是由子类调用的，而是以相反的方式。怎么做？当然很抽象啦！

换而言之，它是一种非常适合框架库的算法骨架。用户只需要实现子类的一种方法，其父类便可去搞定这项工作了。

这是一种分离具体类的简单办法，且可以减少复制粘贴，这也是它常见的原因。
### UML 图
![Template Method](https://raw.githubusercontent.com/qiujiafei123/DesignPatterns/master/Image/template_method.png)
