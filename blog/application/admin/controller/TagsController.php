<?php
namespace app\admin\controller;

use think\Db;
use think\Loader;

class TagsController extends BaseController
{
    public function lst()
    {
        $tags = Loader::model('tags')->getTagsPage();
        $this->assign(array(
            'tags' => $tags
        ));
        return $this->fetch();
    }

    public function add()
    {
        if (request()->isPost()) {
            $data = [
                'tagname' => input('tagname')
            ];

            $validate = Loader::validate('tags');
            if (!$validate->scene('add')->check($data)) {
                $this->error($validate->getError());
            }

            if (Loader::model('tags')->addTags($data)) {
                $this->success('添加标签成功', 'lst');
            } else {
                $this->error('添加标签失败');
            }
        }
        return $this->fetch();
    }

    public function edit()
    {
        $tag = Loader::model('tags')->getByIdTags(input('id'));

        if (request()->isPost()) {
            $data = [
                't_id' => input('t_id'),
                'tagname' => input('tagname')
            ];

            $validate = Loader::validate('Tags');
            if (!$validate->scene('edit')->check($data)) {
                $this->error($validate->getError());
            }

            if (Loader::model('tags')->editTags($data)) {
                $this->success('修改标签成功', 'lst');
            } else {
                $this->error('修改标签失败');
            }
        }

        $this->assign('tag', $tag);
        return $this->fetch();
    }

    public function del()
    {
        if (Loader::model('tags')->delTags(input('id'))){
            $this->success('标签删除成功', 'lst');
        } else {
            $this->error('标签删除失败');
        }
    }

}

