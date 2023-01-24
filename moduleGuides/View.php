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

class View
{
    public function register (\startphp\Core $app)
    {
        //注册View队列
        $app->instance('viewQueue',$app->viewQueue->init($view = $app->view,"systemView"));
    }
}