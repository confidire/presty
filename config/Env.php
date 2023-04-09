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
    'error_auto_clean' => false,                                   //是否在错误抛出后清空所有已输出内容（包括echo、var_dump、print_f等函数的输出结果）
    'render_auto_clean' => false,                                  //是否在视图渲染后清空所有已输出内容（非开发环境不建议关闭）
    'save_error_log' => false,                                     //是否在错误抛出后将错误详情保存至错误日志中
    'send_error_log' => false,                                     //是否在错误抛出后将错误详情发送至developer_email中设置的邮箱
    'save_running_log' => false,                                   //是否保存系统每次运行结果（网站每次被访问都将新建日志文件，不建议在生产环境中开启）
    'auto_xss_protect' => false,                                   //是否在页面渲染前时自动运行反XSS注入功能（网站作为API接口时建议开启，普通网站开启后可能会无法正常渲染页面）
    'use_system_index_route' => true,                              //是否将首页（即“http://yourdomain.com/”）Url默认解析为系统主页Url（即“/默认app名/Index/Index”），若不需要须手动设置首页路由别名
    'developer_email' => '',                                       //开发者邮箱账号
    'file_suffix' => '.html',                                      //页面文件拓展名后缀
    'template_suffix' => '.tpl',                                   //模板文件拓展名后缀
    'response_type' => 'View',                                     //页面默认的输出格式
];