# 依赖注入模式 (Dependency Injection)
### 目的
用松散耦合的方式来更好的实现可测试、可维护和可扩展的代码。

### 用法
`DatabaseConfiguration` 被注入 `DatabaseConnection` 并获取所需的 `$config`。如果没有依赖注入模式， 配置将直接创建 `DatabaseConnection`。这对测试和扩展来说很不好。

### 示例
>+ `Doctrine2 ORM` 使用依赖注入。 例如，注入到 `Connection` 对象的配置。 对于测试而言， 可以轻松的创建可扩展的模拟数据并注入到 `Connection` 对象中。
>+ `Symfony` 和 `Zend Framework 2` 已经有了依赖注入的容器。他们通过配置的数组来创建对象，并在需要的地方注入 (在控制器中)。


### UML 图
![Dependency Injection](https://raw.githubusercontent.com/qiujiafei123/DesignPatterns/master/Image/dependency_injection.png)
