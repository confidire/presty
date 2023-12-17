<?php
/*
 * +----------------------------------------------------------------------
 * | Presty Framework
 * +----------------------------------------------------------------------
 * | Copyright (c) 20021~2022 Confidire All rights reserved.
 * +----------------------------------------------------------------------
 * | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
 * +----------------------------------------------------------------------
 * | Email: 790455692@qq.com
 * +----------------------------------------------------------------------
 */

return [
    //框架核心库
    "core" => [ModuleGuides\Core::class],
    //HTTP处理库
    "http" => [ModuleGuides\Http::class],
    //视图与模板引擎库
    "View" => [ModuleGuides\View::class],
    //数据库
    "database" => [ModuleGuides\Database::class],
    //本地存储与缓存库，需要开启请取消注释
    //"storage" => [ModuleGuides\Storage::class],
];
