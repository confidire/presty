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

namespace moduleGuides;

use startphp\Facade\Hook;
class Core
{
    public function register (\startphp\Core $app)
    {

        global $memoryAnalysis;

        unset($GLOBALS["baseDir"],$GLOBALS["vendorDir"]);
        $baseDir = $vendorDir = null;

        if(file_exists (ROOT.".env")){
            $app->env->loadFile();
        }

        require_once DIR. "Hook.php";

        ($langClass = $app->lang)->load();
        $app->instance ("lang",$langClass);

        //注册调试模式日志输出机制
        $memoryAnalysis = new \startphp\DevDebug();


        //监听App_Init
        Hook::getClassName('appInit')->transfer ();

        //注册助手函数
        require_once DIR . "Helper.php";

        //注册系统错误捕获机制
        \startphp\Error::init ();
    }
}