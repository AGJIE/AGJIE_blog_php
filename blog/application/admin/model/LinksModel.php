<?php
namespace app\admin\model;
use think\Db;
use think\Model;

class LinksModel extends Model
{
    public function getLinksPage()
    {
        return Db::name('links')->paginate(5);
    }

    public function addLinks($data)
    {
        return Db::name('links')->insert($data);
    }

    public function editLinks($data)
    {
        return Db::name('links')->update($data);
    }

    public function delLinks($links_id)
    {
        return Db::name('links')->delete($links_id);
    }

    public function getByIdLinks($links_id)
    {
        return Db::name('links')->find($links_id);
    }
}