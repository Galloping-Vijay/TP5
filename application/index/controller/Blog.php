<?php
namespace app\index\controller;

//use app\Index\controller\Base;
use think\Controller;
use think\Db;

class Blog extends Controller
{
    public function index()
    {
        $data = Db::name('data')->find('2');

        $this->assign('result',$data);
        return $this->fetch();
    }

    public function get($id){
        return '查看id='.$id.'的内容';
    }

    public function read($name){

        return '查看name='.$name.'的内容';
    }

    public function archive($year, $month)
    {
        return '查看' . $year . '/' . $month . '的归档内容';
    }
}
