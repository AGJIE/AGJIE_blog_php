<?php
namespace app\index\controller;

use think\Db;
use think\Loader;

class SearchController extends BaseController
{
    public function index()
    {
        $keyword = input('keyword');

        if (request()->isGet()) {
            $articles = Loader::model('article')->getArticle_Search($keyword);
        }

        $this->assign(array(
            'keyword' => $keyword,
            'articles' => $articles
        ));
        return $this->fetch('search');
    }
}

