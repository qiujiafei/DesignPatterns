# 享元模式 (Flyweight)
### 目的
为了节约内存的使用，享元模式会尽量使类似的对象共享内存。在大量类似对象被使用的情况中这是十分必要的。常用做法是在外部数据结构中保存类似对象的状态，并在需要时将他们传递给享元对象。

### UML 图
![Flyweight](https://raw.githubusercontent.com/qiujiafei123/DesignPatterns/master/Image/flyweight.png)
