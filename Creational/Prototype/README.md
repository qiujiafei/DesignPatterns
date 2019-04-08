# 原型模式 (Prototype)

### 目的
相比正常创建一个对象 `(new Foo())`，首先创建一个原型，然后克隆它会更节省开销。

### 示例
>+ 大量数据 (例如：通过 ORM 模型一次性往数据库插入 1,000,000 条数据)。

### UML 图
![Prototype](https://raw.githubusercontent.com/qiujiafei123/DesignPatterns/master/Image/prototype.png)
