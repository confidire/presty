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
    //系统默认使用的模板引擎，需要与对应的模板引擎类名保持一致
    'template_engine' => '\presty\view\Start',
    //前端模板引擎标识符前缀
    'template_engine_prefix' => '{{',
    //前端模板引擎标识符后缀
    'template_engine_suffix' => '}}',
    //变量标识符前缀
    'variable_prefix' => '$',
    //常量标识符前缀
    'constant_prefix' => '%',
    //视图映射配置文件名
    'view_mapping_config_file_name' => 'ViewMapping',
    //页面文件拓展名后缀
    'file_suffix' => '.html',
    //模板文件拓展名后缀
    'template_suffix' => '.tpl',
    //页面默认的输出格式
    'response_type' => 'View',
];