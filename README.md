# Presty v1.0.0

[![OSCS Status](https://www.oscs1024.com/platform/badge/Cat-Catalpa/core.svg?size=small)](https://www.oscs1024.com/project/Cat-Catalpa/core?ref=badge_small)
![Version-1.0](https://img.shields.io/badge/version-1.0-success)


Presty 是一款易上手、轻量级、完善化的后端PHP开发框架。

[框架官网](https://presty.catcatalpa.com) | [开发文档](https://doc.presty.catcatalpa.com) | [开源地址](https://github.com/catcatalpa/presty) | [开源协议](https://github.com/catcatalpa/presty/blob/master/LICENSE)

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

## 二、Presty v1.0.0-dev-6 更新日志：

- 模板引擎新增`Foreach`标签
- 完善了ORM的`GROUPBY`、`ORDERBY`、`HAVING`、`LIMIT`、`LIKE`、`ESCAPE`等子句柄
- 新增命令行模式下快速生成控制器文件、模型文件、入口文件、应用目录等命令
- 新增AES加密/解密算法及函数（`AESencrypt()`、`AESdecrypt()`）
- 新增Curl网络请求相关助手函数（`curl_send()`、`curl_get()`、`curl_post()`）
- 新增动态密钥`Dynamic Key`（简称`DS`）生成算法（`createDs()`）
- 修复了部分助手函数中的非静态类的调用语法错误
- 修复了针对于在Linux平台运行时框架核心库目录名与命名空间不一致的导致无法系统意外终止运行漏洞
- 修复了其他已知Bug

## 三、框架已获得以下机构的认证

[![墨菲安全](https://www.murphysec.com/assets/logo.6a136b81.svg)](https://old.murphysec.com/dr/ajgI6mrQe7eRYZmc0J)


## 四、特别感谢

Presty在开发时借助了以下开源项目的帮助，特在此向这些开源项目及其作者予以感谢。

|       项目名       |   作者    | 开源协议 |                     开源地址                     |  代码用途   | 使用程度  |
|:---------------:|:-------:|:----:|:--------------------------------------------:|:-------:|:-----:|
| symfony/console | symfony | MIT  | [Github](https://github.com/symfony/symfony) | 构建控制台命令 | 使用源代码 |