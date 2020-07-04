<?php
namespace app\index\controller;
use think\Db;
use think\Loader;

class IndexController extends BaseController
{
    public function index()
    {
        $articles = Loader::model('article')->getArticlePage();
        $page = $articles->render();

        $this->assign(array(
            'articles'=>$articles,
            'page'=>$page
        ));
        return $this->fetch();
    }

}
