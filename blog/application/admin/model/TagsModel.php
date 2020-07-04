<?php
namespace app\admin\model;
use think\Db;
use think\Model;

class TagsModel extends Model
{
    public function getTagsList()
    {
        return Db::name('tags')->select();
    }

    public function getTagsPage()
    {
        return Db::name('tags')->paginate(5);
    }

    public function addTags($data)
    {
        return Db::name('tags')->insert($data);
    }

    public function editTags($data)
    {
        return Db::name('tags')->update($data);
    }

    public function delTags($tags_id)
    {
        return Db::name('tags')->delete($tags_id);
    }

    public function getByIdTags($tags_id)
    {
        return Db::name('tags')->find($tags_id);
    }
}
