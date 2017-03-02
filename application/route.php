<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
        // 定义路由的请求类型和后缀
        //'hello/[
        //:name]' => ['index/hello', ['method' => 'get', 'ext' => 'html']],
    ],

    'user/index' => 'index/user/index',
    'user/create' => 'index/user/create',
    'user/add' => 'index/user/add',
    'user/add_list' => 'index/user/addList',
    'user/update/:id' => 'index/user/update',
    // 添加路由规则 路由到 index控制器的hello操作方法
    //'hello/[:name]' => 'index/index/hello',

    // 设置pathinfo分隔符
    //'pathinfo_depr' => '-',
    //自动加后缀
    //'url_html_suffix' => 'html',

    'blog/:year/:month' => ['blog/archive', ['method' => 'get'], ['year' => '\d{4}', 'month' => '\d{2}']],
    'blog/:id' => ['blog/get', ['method' => 'get'], ['id' => '\d+']],
    'blog/:name' => ['blog/read', ['method' => 'get'], ['name' => '\w+']],

];
