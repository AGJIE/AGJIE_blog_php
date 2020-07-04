<?php
namespace app\admin\controller;
use app\admin\model\LinksModel as LinksModel;
use think\Loader;

class LinksController extends BaseController
{
    public function lst()
    {
        $links = Loader::model('links')->getLinksPage();
        if (!$links){
            $this->error('获取数据列表失败');
        }
        $this->assign('links', $links);
        return $this->fetch();
    }

    public function add()
    {
        if (request()->isPost()){
            $data = [
                'title' => input('title'),
                'url' => input('url'),
                'desc' => input('desc'),
            ];

            $validate = Loader::validate("links");
            if (!$validate->scene('add')->check($data)){
                return $this->error($validate->getError());
            }
            if (Loader::model('links')->addLinks($data)){
                return $this->success('链接添加成功','lst');
            } else {
                return $this->error('链接添加失败');
            }
        }
        return $this->fetch();
    }

    public function edit()
    {
        $links = Loader::model('links')->getByIdLinks(input('id'));

        if (request()->isPost()){
            $data = [
                'id' => input('id'),
                'title' => input('title'),
                'url' => input('url'),
                'desc' => input('desc'),
            ];

            $validate = Loader::validate('links');
            if (!$validate->scene('edit')->check($data)){
                $this->error($validate->getError());
            }

            if (Loader::model('links')->editLinks($data) !== false){
                $this->success('修改链接成功', 'lst');
            } else {
                $this->error('修改链接失败');
            }
        }

        $this->assign('links', $links);
        return $this->fetch();
    }

    public function del()
    {
        if (Loader::model('links')->delLinks(input('id'))){
            $this->success('链接删除成功！', 'lst');
        } else {
            $this->error('链接删除失败！');
        }
    }
}