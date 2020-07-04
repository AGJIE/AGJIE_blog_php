<?php
namespace app\admin\controller;
use think\Controller;
use think\Loader;

class LoginController extends Controller
{
    public function index()
    {
        if(request()->isPost()){
            $admin = Loader::model('Admin');
            $data = input('post.');
            $num = $admin->login($data);
            switch ($num) {
                case 200:
                    $this->success("信息正确，正在为你跳转...",'index/index');
                    break;
                case 407:
                    $this->error("验证码错误");
                    break;
                default:
                    $this->error("用户名或者密码错误");
            }
        }
        return $this->fetch("login");
    }
}