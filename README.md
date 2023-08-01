# Presty v1.0.0

![Version-1.0](https://img.shields.io/badge/version-1.0-success)


Presty 是一款易上手、轻量级、完善化的后端PHP开发框架。

[框架官网](https://presty.confidire.com) | [开发文档](https://doc.presty.confidire.com) | [开源地址](https://github.com/confidire/presty) | [开源协议](https://github.com/confidire/presty/blob/master/LICENSE)

## 一、在使用本版本的Presty前，您需要了解以下重要事项：

1. Presty v1.0.0 对于 PHP 运行环境要求是 7.3 或以上。
2. 若您单独更新过框架核心文件版本，请注意您当前项目根目录下的`README.md`文件可能并不是适合您框架版本的最新版，请以`vendor/tomanday/presty`目录下的`README.md`文件为主。
3. 该版本为Windows平台的用户提供了exe操作文件，此文件支持一键下载框架、执行框架控制台命令等操作，简化了Windows平台在控制台中的操作难易度，您可选择性安装，文件将会附在`presty`仓库的每个Release的`Code`中。
4. 选择Presty版本时，请注意了解版本号中所表示的信息：
    - `dev` 表示此版本为早期研发版本，是为了验证框架是否能够正常运行而发布的版本，极其不稳定，非必要情况下请不要安装。
    - `alpha` 表示此版本为开发中版本，新版本功能尚未完全开发完成，稳定性低，不推荐安装。
    - `beta` 表示此版本为测试版本，新版本功能已基本完善，主要是各类Bug的修复，稳定性中等偏低，不推荐在生产环境中安装。
    - `patch` 表示此版本为上版本的补丁版本，修复了一些致命性Bug，其余安全性、稳定性较前一个版本有所提高，其余功能没有过多改动。
---

## 二、Presty v1.0.0-dev-7 更新日志：

- 新增`验证器`机制，默认内置四十余条验证规则
- 模板引擎新增`include`标签
- ORM中子句`WHERE`新增`in`查询条件
- 优化了ORM中子句（影响范围包括WHERE、LIKE等关键字）的展开与拼合算法
- 修复了Linux平台因大小写敏感导致的错误
- 修复了特定情况下路由引擎会错误的删去值为0或`false`的Url参数的问题
- 修复了特定情况下ORM解析子句时对数字键值的解析返回结果异常的问题
- 修复了非调试模式下报错页面异常的问题
- 修复了特定情况下调试信息输出类换算内存单位时有几率出现数据类型报错的问题
- 修复了ModuleGuides命名错误的问题
- 修复了其他已知Bug

## 三、框架已获得以下机构的认证

[![墨菲安全](https://www.murphysec.com/assets/logo.6a136b81.svg)](https://old.murphysec.com/dr/ajgI6mrQe7eRYZmc0J)


## 四、特别感谢

Presty在开发时借助了以下开源项目的帮助，特在此向这些开源项目及其作者予以感谢。

|       项目名       |   作者    | 开源协议 |                     开源地址                     |  代码用途   | 使用程度  |
|:---------------:|:-------:|:----:|:--------------------------------------------:|:-------:|:-----:|
| symfony/console | symfony | MIT  | [Github](https://github.com/symfony/symfony) | 构建控制台命令 | 使用源代码 |