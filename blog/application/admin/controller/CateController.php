<?php
namespace app\admin\controller;
use think\Loader;

class CateController extends BaseController
{
    public function lst()
    {
        $cate = Loader::model('cate')->getCatePage();
        $this->assign('cate',$cate);
        return $this->fetch();
    }

    public function add()
    {
        if (request()->isPost()){
            $data = [
                'catename' => input('catename'),
            ];

            $validate = Loader::validate('Cate');
            if (!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
            }

            if (Loader::model('cate')->addCate($data)){
                $this->success('添加栏目标签成功','lst');
            } else {
                $this->error('添加栏目标签失败');
            }
        }
        return $this->fetch();
    }

    public function edit()
    {
        $cate = Loader::model('cate')->getByIdCate(input('id'));

        if (request()->isPost()){
            $date = [
                'id' => input('id'),
                'catename' => input('catename'),
            ];

            $validate = Loader::validate('Cate');
            if (!$validate->scene('edit')->check($date)){
                $this->error($validate->getError());
            }

            if (Loader::model('cate')->editCate($date) != false){
                $this->success('栏目修改成功', 'lst');
            } else {
                $this->error('栏目修改失败');
            }
        }

        $this->assign('cate',$cate);
        return $this->fetch();
    }

    public function del()
    {
        if (Loader::model('cate')->delCate(input('id'))){
            $this->success('栏目删除成功', 'lst');
        } else {
            $this->error('栏目删除失败');
        }
    }
}