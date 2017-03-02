<?php
namespace app\index\controller;

//use app\Index\controller\Base;
use think\Controller;
use think\Db;
use think\Request;

class Index extends Controller
{
    public function index()
    {
        $data = Db::name('data')->find('2');

        $this->assign('result',$data);
        return $this->fetch();
    }

    public function test(){
        $parent =parent::index();
        $taxt = $parent."越努力越幸运!";
        return $taxt;
    }

    public function hello($name='weijinfeng'){

        $request =Request::instance();
        //获取当前url地址,不含域名
        echo 'url:'.$request->url().'<br/>';
        return 'hello,'.$name.'!';
       /* $this->assign('name',$name);
        return $this->fetch();*/
    }
}
