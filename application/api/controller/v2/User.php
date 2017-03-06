<?php
namespace app\api\controller\v2;
use app\api\model\User as UserModel;
use app\api\exception\Http;
class User
{
// 获取用户信息
    public function read($id = 0)
    {
        try{
            $user = UserModel::get($id, 'profile');
            if ($user) {
                return json($user);
            } else {
                //return json(['error' => '用户不存在'], 404);
                // 抛出HTTP异常 并发送404状态码
                abort(404,'用户不存在');
            }
        }catch(\Exception $e){
            return abort(404,$e->getMessage());
        }

    }
}