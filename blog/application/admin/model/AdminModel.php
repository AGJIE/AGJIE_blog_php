<?php
namespace app\admin\model;
use think\captcha\Captcha;
use think\Db;
use think\Model;

class AdminModel extends Model
{
    public function login($data)
    {
//        验证码验证
        $captcha = new Captcha();
        if (!$captcha->check($data['code'])){
            return 407;
        }

        $user = Db::name('admin')->where('username','=',$data['username'])->find();
        if ($user){
            if ($user['password'] == md5($data['password'])){
                session('username',$user['username']);
                session('uid',$user['id']);
                return 200; //信息正确
            }else{
                return 401 ;//密码错误
            }
        }else{
            return 401;//用户不存在
        }
    }

    public function getAdminPage()
    {
        $list = Db::name('admin')->paginate(3);
        return $list;
    }

    public function addAdmin($data)
    {
        return Db::name('admin')->insert($data);
    }

    public function editAdmin($data, $admin_id)
    {
        if ($data['password']){
            $data['password'] = md5(input('password'));
        }else{
            $data['password'] = $admin_id['password'];
        }
        return Db::name('admin')->update($data);
    }

    public function delAdmin($admin_id)
    {
        return Db::name('admin')->delete($admin_id);
    }

    public function getByIdAdmin($admin_id)
    {
        return Db::name('admin')->where('id','=',$admin_id)->find();
    }


}
