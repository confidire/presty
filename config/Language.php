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
    //允许加载的语种
    'allow_load_languages' => ['zh-cn'],
    //默认加载的语种
    'default_languages' => 'zh-cn',
    //语言解析时混合Header中的HTTP_ACCEPT_LANGUAGE一起分析
    'judge_header_info' => false,
    //限制加载Header中所有的语种
    'limit_load_all_language' => false,
];