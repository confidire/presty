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

return [
    'session_auto_load' => false,                             //是否自动开启Session，关闭后需用户手动执行session_start()函数启动Session会话
    'database_auto_load' => false,                            //是否在框架初始化时自动连接数据库，如果数据库参数未配置打开此项将会报错
    'error_auto_clean' => false,                              //是否在错误抛出后清空所有已输出内容（包括echo、var_dump、print_f等函数的输出结果）
    'render_auto_clean' => false,                             //是否在视图渲染后清空所有已输出内容（非开发环境不建议关闭）
    'save_error_log' => false,                                //是否在错误抛出后将错误详情保存至错误日志中
    'send_error_log' => false,                                //是否在错误抛出后将错误详情发送至developer_email中设置的邮箱
    'save_running_log' => false,                              //是否保存系统每次运行结果（网站每次被访问都将新建日志文件，不建议在生产环境中开启）
    'auto_xss_protect' => false,                              //是否在页面渲染前时自动运行反XSS注入功能，保护用户上传的数据隐私安全
    'use_system_index_route' => true,                         //是否将首页（即“http://yourdomain.com/”）Url默认解析为系统主页Url（即“/默认app名/Index/Index”），若不需要须手动设置首页路由别名
    'auto_load_database' => false,                            //是否在框架启动时自动初始化数据库
    'developer_email' => '',                                  //开发者邮箱账号
    'file_suffix' => '.html',                                 //页面文件拓展名后缀
    'template_suffix' => '.tpl',                              //模板文件拓展名后缀
    'access_denied_page' => 'AccessDenied',                   //应用入口文件拒绝访问后默认跳转的页面模板文件名
    'response_type' => 'view',                                //页面默认的输出格式
    'url_parser' => 'startphp\urlParser\Start',               //系统默认使用的模板引擎，需要与对应的模板引擎类名保持一致
    'template_engine' => '\startphp\view\Start',              //系统默认使用的模板引擎，需要与对应的模板引擎类名保持一致
    '404_template' => '',
];