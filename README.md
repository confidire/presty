# Presty v1.0.0

![Version-1.0](https://img.shields.io/badge/version-1.0-success)

Presty 是一款易上手、轻量级、完善化的后端PHP开发框架。

[框架官网](https://presty.confidire.com) | [开发文档](https://doc.presty.confidire.com) | [开源地址](https://github.com/confidire/presty) | [开源协议](https://github.com/confidire/presty/blob/master/LICENSE)

## 一、在使用本版本的Presty前，您需要了解以下重要事项：

1. Presty v1.0.0 对于 PHP 运行环境要求是 7.3 或以上。
2. 若您单独更新过框架核心文件版本，请注意您当前项目根目录下的 `README.md`文件可能并不是适合您框架版本的最新版，请以 `vendor/tomanday/presty`目录下的 `README.md`文件为主。
3. 该版本为Windows平台的用户提供了exe操作文件，此文件支持一键下载框架、执行框架控制台命令等操作，简化了Windows平台在控制台中的操作难易度，您可选择性安装，文件将会附在 `presty`仓库的每个Release的 `Code`中。
4. 选择Presty版本时，请注意了解版本号中所表示的信息：
   - `dev` 表示此版本为早期研发版本，是为了验证框架是否能够正常运行而发布的版本，极其不稳定，非必要情况下请不要安装。
   - `alpha` 表示此版本为开发中版本，新版本功能尚未完全开发完成，稳定性低，不推荐安装。
   - `beta` 表示此版本为测试版本，新版本功能已基本完善，主要是各类Bug的修复，稳定性中等偏低，不推荐在生产环境中安装。
   - `patch` 表示此版本为上版本的补丁版本，修复了一些致命性Bug，其余安全性、稳定性较前一个版本有所提高，其余功能没有过多改动。
5. 本次部分更新（下方更新日志中携带 `*`的更新项）修改范围包括根目录文件，对于使用旧版本的项目，更新到此版本时需要手动覆盖相关文件方可生效，我们建议您在备份好网站数据后再进行覆盖升级，以免造成不必要的损失。

---

## 二、Presty v1.0.0-dev-8 更新日志：

- *异常抛出页面 `错误抛出位置`中错误文件代码展示部分支持语法高亮功能
- *重写了路由机制，调整了部分文件结构（该项更新尚未完成，相关功能将暂时无法使用）
- 系统运行状况展示面板新增功能指引和错误输出提示
- 容器类新增部分函数
- 优化了部分文件结构
- 优化了模块基类部分函数的运行逻辑
- 优化了系统运行状况展示面板中部分内容的显示效果
- 优化了部分不符合PSR-4规范的路径命名
- 优化了部分命名的大小写区分
- 优化了容器中部分需频繁复用的类的调用逻辑
- 修复了开发模式下系统运行状况展示面板异常缺失的错误
- 修复ModuleGuide命名格式错误等引起的致命错误
- 修复了创建视图缓存时指定目录结构缺失引起的错误
- 修复了AntiXSS类在高版本PHP中因弃用函数引起的报错
- 修复了其他已知Bug

## 三、v1.0.0 To Do List

* [ ] 实现中层控制器
* [ ] 完善Model基类
* [ ] 完善ORM机制
* [ ] 重写模板引擎
* [ ] 重写路由机制

## 四、框架已获得以下机构的认证

[![墨菲安全](https://www.murphysec.com/assets/logo.6a136b81.svg)](https://old.murphysec.com/dr/ajgI6mrQe7eRYZmc0J)

## 五、特别感谢

Presty在开发时借助了以下开源项目的帮助，特在此向这些开源项目及其作者予以感谢。

|        项目名        |                          作者                          |   开源协议   |                      开源地址                      |              代码用途              | 使用程度 |
| :------------------: | :-----------------------------------------------------: | :----------: | :-------------------------------------------------: | :--------------------------------: | :------: |
|   symfony/console   |         Fabien Potencier<br />Symfony Community         |     MIT     |      [Github](https://github.com/symfony/symfony)      |           构建控制台命令           | 使用接口 |
|   phpunit/phpunit   |                   Sebastian Bergmann                   | BSD 3-Clause | [Github](https://github.com/sebastianbergmann/phpunit) |             自动化测试             | 使用接口 |
| scrivo/highlight.php | Geert Bergman<br />Vladimir Jimenez<br />Martin Folkers | BSD 3-Clause |   [Github](https://github.com/scrivo/highlight.php)   | 实现部分场景中的<br />代码高亮需求 | 使用接口 |
