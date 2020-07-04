<?php
namespace app\index\model;

use think\Db;
use think\Model;

class ArticleModel extends Model
{
    public function incArticleId($article_id)
    {
        Db::name('article')->where('id', '=', $article_id)->setInc('click');
    }

    public function getArticle($article_id)
    {
        $article = Db::name('article')
            ->alias('a')
            ->join('tags t','a.keywords=t.t_id')
            ->join('cate c', 'a.cateid=c.id')
            ->field('a.id,a.title,a.time,a.desc,a.content,a.pic,a.cateid,a.author,a.click,c.id as c_id,c.catename,t.t_id,t.tagname')
            ->where('a.id','=',$article_id)
            ->find();
        return $article;
    }

    public function getArticle_related($tags_id)
    {
        $related_article = Db::name('article')
            ->field('title,id')
            ->where('keywords','=',$tags_id)
            ->limit(8)
            ->select();
        return $related_article;
    }

    public function getArticle_recommend($cate_id)
    {
        $recommend_article = Db::name('article')
            ->where(array('cateid'=>$cate_id,'state'=>1))
            ->limit(8)
            ->select();
        return $recommend_article;
    }

    public function getArticle_click()
    {
        return Db::name('article')->order('click desc')->limit(8)->select();
    }

    public function getByClickArticle()
    {
        return Db::name('article')->where(array('state'=>1))->order('click desc')->limit(8)->select();
    }

    public function getByCateid_page($cate_id)
    {
        $articles = Db::name('article')
            ->alias('a')
            ->join('tags t', 'a.keywords=t.t_id')
            ->field('a.id as a_id,a.pic,a.title,a.time,a.desc,t.tagname')
            ->where(array('cateid'=>$cate_id))
            ->paginate(5);
        return $articles;
    }

    public function getArticlePage()
    {
        $articles = Db::name('article')
            ->alias("a")
            ->join('tags b', 'a.keywords = b.t_id')
            //想要的字段
            ->field('a.id,a.pic,a.title,a.desc,a.time,b.t_id,b.tagname')
            //查询
            ->paginate(5);
        return $articles;
    }

    public function getArticle_Search($keyword)
    {
        $articles = Db::name('article')
            ->alias('a')
            ->join('tags t', 'a.keywords=t.t_id')
            ->field('a.id,a.title,a.time,a.desc,a.pic,t.tagname')
            ->where('title','like','%'.$keyword.'%')
            ->paginate(8);
        return$articles;
    }

    public function getByKeywordsArticle_page($keywords)
    {
        $articles = Db::name('article')
            ->alias('a')
            ->join('tags t', 'a.keywords=t.t_id')
            ->field('a.id,a.title,a.time,a.desc,a.pic,t.t_id,t.tagname')
            ->where('keywords', '=', $keywords)
            ->paginate(5);
        return $articles;
    }
}
