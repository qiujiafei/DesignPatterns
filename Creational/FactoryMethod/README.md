# 工厂方法模式 (Factory Method)
### 目的
对比简单工厂模式的优点是，您可以将其子类用不同的方法来创建一个对象。

举一个简单的例子，这个抽象类可能只是一个接口。

这种模式是「真正」的设计模式， 因为他实现了S.O.L.I.D原则中「D」的 「依赖倒置」。

这意味着工厂方法模式取决于抽象类，而不是具体的类。 这是与简单工厂模式和静态工厂模式相比的优势。

### UML 图
![Multiton](https://raw.githubusercontent.com/qiujiafei123/DesignPatterns/master/Image/factory_method.png)
