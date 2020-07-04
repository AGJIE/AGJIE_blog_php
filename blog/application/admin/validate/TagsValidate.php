<?php
namespace app\admin\validate;
use think\Validate;

class TagsValidate extends Validate
{
    protected $rule = [
        'tagname' => 'require',
    ];

    protected $message = [
        'tagname.require' => '标签名称必须填写',
    ];

//    场景
    protected $scene = [
      'add' => ['tagname'=>'require'],
      'edit' =>['tagname'=>'require'],
    ];
}
