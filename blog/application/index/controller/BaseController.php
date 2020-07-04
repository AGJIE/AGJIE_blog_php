<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Loader;

class BaseController extends Controller
{
    public  function _initialize()
    {
        $this->right();
        $this->tags();
        $cateres = Loader::model('cate')->getCateList_desc();
        $this->assign('cateres', $cateres);
    }

    public function right()
    {
        $article = Loader::model('article');
        $click_article = $article->getArticle_click();
        $state_article = $article->getByClickArticle();
        $this->assign(array(
            'click_article'=>$click_article,
            'state_article'=>$state_article
        ));

    }

    public function tags(){
        $tags = Loader::model('tags')->getTagsList();
        $this->assign('tags',$tags);
    }
}
