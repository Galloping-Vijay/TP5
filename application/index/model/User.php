<?php

/**
 * Created by PhpStorm.
 * User: wjf
 * Date: 2017/3/2
 * Time: 8:42
 */

namespace app\index\model;
use think\Model;

class User extends Model
{
    //定义关联方法
    public function books(){
        return $this->hasMany('Book');
    }
}