<?php
namespace app\admin\validate;

use think\Validate;

class CateValidate extends Validate
{
    protected $rule = [
        'catename' => 'require|unique:cate',
    ];

    protected $message = [
        'catename.require' => '栏目不能为空',
        'catename,unique' => '栏目名称不能重复',
    ];

    protected $scene = [
        'add' => ['catename'],
        'edit' => ['catename'],
    ];

}