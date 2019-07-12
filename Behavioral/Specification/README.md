# 规格模式 (Specification)

### 目的
构建一个清晰的业务规则规范，其中每条规则都能被针对性地检查。
每个规范类中都有一个称为 `isSatisfiedBy` 的方法，方法判断给定的规则是否满足规范从而返回 `true` 或 `false`。
### 示例
+ [RulerZ](https://github.com/K-Phoen/rulerz)

### UML 图
![Specification](https://raw.githubusercontent.com/qiujiafei123/DesignPatterns/master/Image/specification.png)