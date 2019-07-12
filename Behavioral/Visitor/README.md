# 访问者模式 (Visitor)

### 目的
访问者模式可以让你将对象操作外包给其他对象。这样做的最主要原因就是关注（数据结构和数据操作）分离。但是被访问的类必须定一个契约接受访问者。 (详见例子中的 `Role::accept` 方法)

契约可以是一个抽象类也可直接就是一个接口。在此情况下，每个访问者必须自行选择调用访问者的哪个方法。
### UML 图
![Visitor](https://raw.githubusercontent.com/qiujiafei123/DesignPatterns/master/Image/visitor.png)
