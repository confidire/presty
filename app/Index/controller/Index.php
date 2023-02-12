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

namespace app\Index\controller;
use presty\Controller;
use presty\Request;

class Index extends Controller
{
    public function index (Request $request)
    {
        return $this::assign (["version" => MAIN_VERSION])::getFileContent ('Index/index');
    }
}