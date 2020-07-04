<?php
namespace app\admin\controller;
use app\admin\model\ArticleModel as ArticleModel;
use think\Db;
use think\Loader;
use think\Session;

class ArticleController extends BaseController
{
    public function lst()
    {
        $articles = Loader::model('Article')->getAdminPage();
        $articlePage = $articles->render();

        $this->assign(array(
            'articles' => $articles,
            'articlePage' => $articlePage
        ));
        return $this->fetch();
    }

    public function add()
    {
        $cate = Loader::model('Cate')->getCateList();
        $tags = Loader::model('Tags')->getTagsList();

        if (request()->isPost()){
            $data = [
                'title' => input('title'),
                'author' => Session::get('username'),
                'desc' => input('desc'),
                'keywords' => input('tagname'),
                'content' => input('content'),
                'state' => input('state'),
                'cateid' => input('cateid'),
                'time' => time()
            ];

            $validate = Loader::validate('Article');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
            }

            if (Loader::model('Article')->addArticle($data)){
                $this->success('添加文章成功', 'lst');
            } else {
                $this->error('添加文章失败');
            }
        }

        $this->assign(array(
            'cate' => $cate,
            'tags' => $tags
        ));
        return $this->fetch();
    }

    public function edit()
    {
        $article = Loader::model('article')->getByIdArticle(input('id'));
        $cate = Loader::model('cate')->getCateList();
        $tags = Loader::model('tags')->getTagsList();

        if (request()->isPost()){
            $data = [
                'id' => input('id'),
                'title' => input('title'),
                'author' => Session::get('username'),
                'desc' => input('desc'),
                'keywords' => input('tagname'),
                'content' => input('content'),
                'state' => input('state'),
                'cateid' => input('cateid'),
                'time' => time()
            ];

            $validate = Loader::validate('Article');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
                die;
            }

            if (Loader::model('article')->editArticle($data) != false){
                $this->success('修改文章成功', 'lst');
            } else {
                $this->error('修改文章失败');
            }
        }

        $this->assign(array(
            'article' => $article,
            'cate' => $cate,
            'tags' => $tags
        ));
        return $this->fetch();
    }

    public function del()
    {
        if (Loader::model('article')->delArticle(input('id'))){
            $this->success('文章删除成功', 'lst');
        } else {
            $this->error('文章删除失败');
        }
    }
}
