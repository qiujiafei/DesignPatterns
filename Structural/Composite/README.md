# 组合模式 (Composite)
### 目的
一组对象与该对象的单个实例的处理方式一致。

### 示例
>+ 一个表单类实例在处理其表单所有元素的方法与处理该表单自身实例方法相同，在调用方法 `render()` 时，会随之遍历它的所有子元素并对他们调用 `render()` 方法
>+ `Zend_Config:` 一个配置选项树，每个选项自身就是一个 `Zend_Config` 对象

### UML 图
![Composite](https://raw.githubusercontent.com/qiujiafei123/DesignPatterns/master/Image/composite.png)
