<?php
namespace app\admin\model;

use think\Db;
use think\Model;

class ArticleModel extends Model
{

    public function getArticlePage()
    {
        $articles = Db::name('article')
            ->alias('a')
            ->join('cate c', 'a.cateid=c.id')
            ->field('a.id,a.author,a.title,a.state,a.pic,c.catename')
            ->paginate(5);

        return $articles;
    }

    public function addArticle($data)
    {
        if ($_FILES['pic']['tmp_name']){
            $file = request()->file('pic');
            $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads');
            $data['pic'] = 'uploads/'.$info->getSaveName();
        }

        return Db::name('article')->insert($data);
    }

    public function editArticle($data)
    {
        if ($_FILES['pic']['tmp_name']){
            $file = request()->file('pic');
            $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads');
            $data['pic'] = 'uploads/'.$info->getSaveName();
        }

        return Db::name('article')->update($data);
    }

    public function delArticle($article_id)
    {
        return Db::name('article')->delete($article_id);
    }

    public function getByIdArticle($article_id)
    {
        return Db::name('article')->find($article_id);
    }
}