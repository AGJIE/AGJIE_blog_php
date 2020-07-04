<?php
namespace app\admin\controller;
use app\admin\model\AdminModel;
use think\Loader;

class AdminController extends BaseController
{
    public function lst()
    {
        $list = Loader::model('Admin')->getAdminPage();
        $this->assign('list', $list);
        return $this->fetch();
    }

    public function add()
    {
        if (request()->isPost()){
//            dump(input('post.'));
            $data = [
                'username'=>input('username'),
//                'password'=>md5(input('password')),
                'password' => input('password'),
            ];
//      数据验证
            $validate = Loader::validate('Admin');
            if (!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
            }

            if (Loader::model('Admin')){
                $this->success("添加管理员成功啦","lst");
            }else{
                $this->error("添加管理员失败");
            }
        }
        return $this->fetch();
    }

    public function edit()
    {
        $admin = Loader::model('admin');
        $id = input('id');
        $admins = $admin->getByIdAdmin($id);

        if (request()->isPost()){
            $data = [
              'id' => input('id'),
              'username' => input('username'),
              'password' => input('password')
            ];

            $validate = Loader::validate("Admin");
            if (!$validate->scene('edit')->check($data)){
                $this->error($validate->getError());
            }

            if($admin->editAdmin($data, $admins['id']) !== false){
                $this->success('修改管理员信息成功','lst');
            }else{
                $this->error('修改管理员失败！');
            }
        }

        $this->assign('admins',$admins);
        return $this->fetch();
    }

    public function del()
    {
        $id = input('id');
        if ($id != 2){
            if (Loader::model('admin')->delAdmin(input('id'))){
                $this->success('删除管理员成功', 'lst');
            } else {
                $this->error("删除管理员失败");
            }
        }else{
            $this->error("初始管理员不得删除");
        }
    }

    public function logout()
    {
        session(null);
        $this->success('退出成功！', 'login/index');
    }

}

















