<?php
/*
 * +----------------------------------------------------------------------
 * | Presty Framework
 * +----------------------------------------------------------------------
 * | Copyright (c) 20021~2022 Tomanday All rights reserved.
 * +----------------------------------------------------------------------
 * | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
 * +----------------------------------------------------------------------
 * | Email: 790455692@qq.com
 * +----------------------------------------------------------------------
 */

namespace presty;

//记录系统初始状态
define ('SYSTEM_START_TIME', microtime (true));
define ('SYSTEM_START_MEMORY', memory_get_usage ());


require __DIR__ . '/../vendor/autoload.php';

//框架初始化
$app = (new Core())->init();

//业务处理和渲染输出
$response = $app->runMain ();
$response->send();

//记录状态，结束运行
$app->end();