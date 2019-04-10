# 数据映射模式 (Data Mapper)
### 目的
数据映射器是一种数据访问层，它执行持久性数据存储（通常是关系数据库）和内存数据表示（域层）之间的数据双向传输。 该模式的目标是保持内存表示和持久数据存储相互独立，并保持数据映射器本身。 该层由一个或多个映射器（或数据访问对象）组成，执行数据传输。 映射器实现的范围有所不同。 通用映射器将处理许多不同的域实体类型，专用映射器将处理一个或几个。

这种模式的关键点在于，与活动记录模式不同，数据模型遵循单一责任原则。
### 示例
>+ 数据库对象关系映射器 `ORM`
>+ `Doctrine2` 使用的 `DAO`，名字叫做 `EntityRepository`。
   
### UML 图
![Data Mapper](https://raw.githubusercontent.com/qiujiafei123/DesignPatterns/master/Image/data_mapper.png)
