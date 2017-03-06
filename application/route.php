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
        // ����·�ɵ��������ͺͺ�׺
        //'hello/[
        //:name]' => ['index/hello', ['method' => 'get', 'ext' => 'html']],
    ],

    'user/index' => 'index/user/index',
    'user/create' => 'index/user/create',
    'user/add' => 'index/user/add',
    'user/add_list' => 'index/user/addList',
    'user/update/:id' => 'index/user/update',

    //'hello/[:name]' => 'index/index/hello',
    //':version/user/:id'=>'api/:version.User/read',
    //支持RESTFUL
    //'blogs'=>'index/blog',

    //'pathinfo_depr' => '-',
    //�Զ��Ӻ�׺
    //'url_html_suffix' => 'html',

    'blog/:year/:month' => ['blog/archive', ['method' => 'get'], ['year' => '\d{4}', 'month' => '\d{2}']],
    'blog/:id' => ['blog/get', ['method' => 'get'], ['id' => '\d+']],
    'blog/:name' => ['blog/read', ['method' => 'get'], ['name' => '\w+']],

];


