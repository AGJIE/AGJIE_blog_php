<?php
namespace app\index\controller;
use think\Db;
use think\Loader;

class CateController extends BaseController
{
    public function index()
    {
        $cate_id = input('cateid');
        $articles = Loader::model('article')->getByCateid_page($cate_id);
        $page = $articles->render();
        $cate = Loader::model('cate')->getByIdCate($cate_id);

        $this->assign(array(
            'articles'=>$articles,
            'cate'=>$cate,
            'page'=>$page
        ));
        return $this->fetch('cate');
    }
}