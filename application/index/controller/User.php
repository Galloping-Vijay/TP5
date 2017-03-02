<?php
/**
 * Created by PhpStorm.
 * User: wjf
 * Date: 2017/3/2
 * Time: 8:43
 */

namespace app\index\controller;
use app\index\model\User as UserModel;
use think\Controller;
use think\Validate;

class User extends Controller
{
// 创建用户数据页面
    public function create()
    {
        return view();
    }
    public function add()
    {
        $data = input('post.');
        // 验证birthday是否有效的日期
        $check = Validate::is($data['birthday'],'date');
        if (false === $check) {
            return 'birthday日期格式非法';
        }
        $user = new UserModel;
        // 数据保存
        $user->save($data);
        return '用户[ ' . $user->nickname . ':' . $user->id . ' ]新增成功';
    }

    // 批量新增用户数据
    public function addList()
    {
        $user = new UserModel;
        $list = [
            ['nickname' => '张三', 'email' => 'zhanghsan@qq.com', 'birthday' => strtotime('1
988-01-15')],
            ['nickname' => '李四', 'email' => 'lisi@qq.com', 'birthday' => strtotime('1990-0
9-19')],
        ];
        if ($user->saveAll($list)) {
            return '用户批量新增成功';
        } else {
            return $user->getError();
        }
    }
}