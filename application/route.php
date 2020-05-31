<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;


//定义路由
//Route::get("hello","admin/index/hello");
// 更深一点定义路由
return [
//pattern全局变量
    '__pattern__' => [
        'name' => '\w+',
    ],
//    'login1' => 'admin/login/login',
    'hello' => 'admin/index/hello',
    'hello/:name/:age' => ['admin/Index/hello', ['method' => 'get'], ['name' => '\w+','age' => '\d+']],
//    'demo4/:name/:money' => ['admin/Index/demo4', ['method' => 'get', 'ext' => 'asp'], ['money' => '\d+']],
//    'demo5/:name' => ['admin/Index/demo5', ['method' => 'get', 'ext' => 'php'], []],
];

