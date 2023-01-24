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

use startphp\Container;

class Http
{
    protected $app;

    public function register (\startphp\Core $app)
    {
        $app->newInstance ("http",true);
        $app->newInstance ("request",true);
        $app->newInstance ("response",true);
    }

    public function init (\startphp\Core $app)
    {
        return $app->make("http")->init($app)->operate($app->make("request"));
    }
}