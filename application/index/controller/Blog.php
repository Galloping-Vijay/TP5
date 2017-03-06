<?php
namespace app\index\controller;

//use app\Index\controller\Base;
use think\Controller;
use think\Db;
use app\index\model\Blog as Blogs;
use think\Request;

class Blog extends Controller
{
    public function index()
    {
        $list = Blogs::all();
        return json($list);
    }

    public function save(Request $request){
        $data = $request->param();
        $result = Blogs::create($data);
        return json($result);
    }

    public function read($id){

        $data = Blogs::get($id);
        return json($data);
    }

    public function update(Request $request,$id){
        $data = $request->param();
        $result = Blogs::update($data,['id'=>$id]);
        return json($result);
    }
    public function delete($id){
        $result = Blogs::destroy($id);
        return json($result);
    }
}
