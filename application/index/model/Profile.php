<?php

/**
 * Created by PhpStorm.
 * User: wjf
 * Date: 2017/3/2
 * Time: 8:42
 */

namespace app\index\model;
use think\Model;

class Profile extends Model
{
    protected  $type =[
        'brithday'=>'timestamp:Y-m-d',
    ];
    /*public function users(){
        //档案belongs to 关联用户
        return $this->belongsTo('Users');
    }*/
}