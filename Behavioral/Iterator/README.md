# 迭代器模式 (Iterator)

### 目的
让对象变得可迭代并表现得像对象集合。

### 示例
+ 在文件中的所有行（对象表示形式的）上逐行处理文件（也是对象）

### 注意
PHP 标准库 `(SPL)` 定义了一个最适合此模式的接口迭代器！
往往也需要实现 `Countable` 接口，允许在迭代器对象上使用  `count($object)`  方法。

### UML 图
![Iterator](https://raw.githubusercontent.com/qiujiafei123/DesignPatterns/master/Image/iterator.png)
