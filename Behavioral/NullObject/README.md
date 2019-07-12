# 空对象模式 (Null Object)

### 目的
空对象模式不属于 `GoF` 设计模式，但是它作为一种经常出现的套路足以被视为设计模式了。它具有如下优点：
+ 客户端代码简单
+ 可以减少报空指针异常的几率
+ 测试用例不需要考虑太多条件

返回一个对象或 `null` 应该用返回对象或者 `NullObject` 代替。
`NullObject` 简化了死板的代码，消除了客户端代码中的条件检查，
例如 `if (!is_null($obj)) { $obj->callSomething(); }` 只需 `$obj->callSomething();` 就行。
### 示例
+ Symfony2: 空日志
+ Symfony2: `Symfony/Console` 空输出
+ 责任链模式中的空处理器
+ 命令行模式中的空命令


### UML 图
![Null Object](https://raw.githubusercontent.com/qiujiafei123/DesignPatterns/master/Image/null_object.png)
