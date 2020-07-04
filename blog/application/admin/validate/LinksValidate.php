<?php
namespace app\admin\validate;
use think\Validate;

class LinksValidate extends Validate
{
    protected $rule =[
        'title' => 'require',
        'url' => 'require|url',
        'desc' => 'require',
    ];

    protected $message =[
        'title.require' => '链接标题不能为空',
        'url.require' => '链接url不能为空',
        'url.activeUrl' => '请输入有效的域名',
    ];

    protected $scene = [
        'add' => ['title', 'url'],
        'edit' => ['title','url','desc'],
    ];
}
