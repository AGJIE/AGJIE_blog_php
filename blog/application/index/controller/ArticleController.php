<?php
namespace app\index\controller;
use think\Db;
use think\Loader;

class ArticleController extends BaseController
{
    public function article()
    {
        $article_id = input("article_id");
        $articles = Loader::model('article');

        $articles->incArticleId($article_id);
        $article = $articles->getArticle($article_id);
        $related_article = $articles->getArticle_related($article['t_id']);
        $recommend_article = $articles->getArticle_recommend($article['c_id']);

        $this->assign(array(
            'article' => $article,
            'related_article' => $related_article,
            'recommend_article' => $recommend_article,
        ));

        return $this->fetch();
    }


}