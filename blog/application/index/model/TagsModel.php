<?php
namespace app\index\model;

use think\Db;
use think\Model;

class TagsModel extends Model
{
    public function getTagsList()
    {
        $tags = Db::name('tags')
            ->field('t_id,tagname')
            ->limit(10)
            ->select();
        return $tags;
    }

    public function getByIdTags($tags_id)
    {
        return Db::name('tags')->find($tags_id);
    }
}
