<?php
/**
 * Created by PhpStorm.
 * User: wjf
 * Date: 2017/3/2
 * Time: 8:43
 */

namespace app\index\controller;
use app\index\model\Users as UsersModel;
use app\index\model\Book;
use app\index\model\Profile;
use app\index\validate\User;
use think\Controller;
use think\Validate;

class Users extends Controller
{


    //关联新增数据
    public function add(){
        $users = new UsersModel();
        $users->name = 'thinkphp';
        $users->password = '12323';
        $users->nickname = '岁月';
        if($users->save()){
            //写入关联数据
            $profile = new Profile();
            $profile->truename = '流程';
            $profile->birthday = '1994-02-11';
            $profile->address = '厦门';
            $profile->email='1@qq.com';
            $users->profile()->save($profile);
            return '用户新增成功';
        }else{
            return $users->getError();
        }
    }

    public function read($id = '')
    {
        $users = UsersModel::get($id);
        echo $users->toJson();
    }

    public function updata($id){
        $users = UsersModel::get($id);
        $users->name = 'php';
        if($users->save()){
            //更新关联数据
            $users->profile->email ='wei@qq.com';
            $users->profile->save();
            return '用户['.$users->name.']更新成功';
        }else{
            return $users->getError();
        }
    }

    public function addBook()
    {
        $user = UsersModel::get(1);
        $book = new Book;
        $book->title = 'ThinkPHP5快速入门';
        $book->publish_time = '2016-05-06';
        $user->books()->save($book);
        return '添加Book成功';
    }

    public function test(){
        $user = UsersModel::get(1);
        $books = $user->books;
        dump($books);
    }
}