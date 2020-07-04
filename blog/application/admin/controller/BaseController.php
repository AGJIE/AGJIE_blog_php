<?php
namespace app\admin\controller;

use think\Controller;

class BaseController extends Controller
{
    public function _initialize()
    {
        if (!session('username')){
            $this->error("请先登录后台...", 'Login/index');
        }
    }
}
