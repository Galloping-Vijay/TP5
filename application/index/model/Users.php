<?php

/**
 * Created by PhpStorm.
 * User: wjf
 * Date: 2017/3/2
 * Time: 8:42
 */

namespace app\index\model;
use think\Model;

class Users extends Model
{
    //开启自动写入时间戳
    protected $autoWriteTimestamp = true;

    //定义自动完成的属性
    protected $insert=['status'=>1];

    //定义关联方法
    public function profile(){
        //用户HAS ONE档案关联
        //hasOne('关联模型名','关联外键','主键','别名定义','join类型')
        return $this->hasOne('Profile');
    }
    //定义关联
    public function books(){
        return $this->hasMany('Book');
    }
}