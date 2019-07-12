# 责任链模式 (Chain Of Responsibilities)

### 目的
建立一个对象链来按指定顺序处理调用。如果其中一个对象无法处理命令，它会委托这个调用给它的下一个对象来进行处理，以此类推。

### 示例
+ 日志框架，每个链元素自主决定如何处理日志消息。
+ 垃圾邮件过滤器。
+ 缓存：例如第一个对象是一个 Memcached 接口实例，如果 “丢失” 它会委托数据库接口处理这个调用。
+ Yii 框架: `CFilterChain` 是一个控制器行为过滤器链。执行点会有链上的过滤器逐个传递，并且只有当所有的过滤器验证通过，这个行为最后才会被调用。


### UML 图
![Chain Of Responsibilities](https://raw.githubusercontent.com/qiujiafei123/DesignPatterns/master/Image/chain_of_responsibilities.png)
