<?php

/**
 * Created by PhpStorm.
 * User: wjf
 * Date: 2017/3/2
 * Time: 8:42
 */

namespace app\index\model;
use think\Model;

class Blog extends Model
{
    protected $autoWriteTimestamp = true;
    protected $insert = [
        'status' => 1,
    ];
    protected $field = [
        'id' => 'int',
        'create_time' => 'int',
        'update_time' => 'int',
        'name', 'title', 'content',
    ];
}