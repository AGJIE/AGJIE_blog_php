<?php
namespace app\admin\model;

use think\Db;
use think\Model;

class CateModel extends Model
{
    public function getCatePage()
    {
        return Db::name('cate')->paginate(5);
    }

    public function getCateList()
    {
        return Db::name('cate')->select();
    }

    public function addCate($data)
    {
        return Db::name('cate')->insert($data);
    }

    public function editCate($data)
    {
        return Db::name('cate')->update($data);
    }

    public function delCate($cate_id)
    {
        return Db::name('cate')->delete($cate_id);
    }

    public function getByIdCate($cate_id)
    {
        return Db::name('cate')->find($cate_id);
    }
}