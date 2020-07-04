<?php
namespace app\index\model;

use think\Db;
use think\Model;

class CateModel extends Model
{
    public function getCateList_desc()
    {
        return Db::name('cate')->order('id desc')->select();
    }

    public function getByIdCate($cate_id)
    {
        return Db::name('cate')->find($cate_id);
    }
}
