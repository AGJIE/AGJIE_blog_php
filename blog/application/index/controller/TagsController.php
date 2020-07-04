<?php
namespace app\index\controller;

use think\Db;
use think\Loader;
use think\Request;

class TagsController extends BaseController
{
    public function index()
    {
        if (Request()->isGet()) {
            $tag_id = input('tag_id');
            $tag_name = Loader::model('tags')->getByIdTags($tag_id);
            $articles = Loader::model('article')->getByKeywordsArticle_page($tag_id);
        }

        $this->assign(array(
            'articles'=>$articles,
            'tag_name'=>$tag_name
        ));
        return $this->fetch('tags');
    }
}
