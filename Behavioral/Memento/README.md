# 备忘录模式 (Memento)

### 目的
它提供了在不破坏封装（对象不需要具有返回当前状态的函数）的情况下恢复到之前状态（使用回滚）或者获取对象的内部状态。

备忘录模式使用 3 个类来实现：`Originator`，`Caretaker` 和 `Memento`。

`Memento` —— 负责存储 `Originator` 的 唯一内部状态 ，它可以包含： `string`，`number`， `array`，类的实例等等。
`Memento` 「不是公开的类」（任何人都不应该且不能更改它），并防止 `Originator` 以外的对象访问它，
它提供 2 个接口：`Caretaker` 只能看到备忘录的窄接口，他只能将备忘录传递给其他对象。
`Originator` 却可看到备忘录的宽接口，允许它访问返回到先前状态所需要的所有数据。

`Originator` —— 它负责创建 `Memento`  ，并记录 外部对象当前时刻的状态， 并可使用 `Memento` 恢复内部状态。
`Originator` 可根据需要决定 `Memento` 存储 `Originator` 的哪些内部状态。
 `Originator` 也许（不是应该）有自己的方法 `(methods)` 。 但是，他们 不能更改已保存对象的当前状态。

`Caretaker` —— 负责保存 `Memento`。 它可以修改一个对象；决定 `Originator` 中对象当前时刻的状态； 从 `Originator` 获取对象的当前状态； 或者回滚 `Originator` 中对象的状态。

### 示例
+ 发送一个随机数
+ 并将这个随机数存在时序机中
+ 保存之前控制  `ORM Model`  中的状态


### UML 图
![Memento](https://raw.githubusercontent.com/qiujiafei123/DesignPatterns/master/Image/memento.png)
