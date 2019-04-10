# 注册模式 (Registry)
### 目的
目的是能够存储在应用程序中经常使用的对象实例，通常会使用只有静态方法的抽象类来实现（或使用单例模式）。  
需要注意的是这里可能会引入全局的状态，我们需要使用依赖注入来避免它。

### 示例
>+ Zend 框架 1：`Zend_Registry` 实现了整个应用程序的 `logger` 对象和前端控制器等
>+ Yii 框架：`CWebApplication` 具有全部应用程序组件，例如 `CWebUser`，`CUrlManager` 等
### UML 图
![Registry](https://raw.githubusercontent.com/qiujiafei123/DesignPatterns/master/Image/registry.png)
