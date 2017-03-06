<?php
/**
 * Created by PhpStorm.
 * User: wjf
 * Date: 2017/3/6
 * Time: 13:55
 */

namespace app\api\model;
use think\Model;

class Profile extends Model
{
    protected $type = [
        'birthday' => 'timestamp:Y-m-d',
    ];
}