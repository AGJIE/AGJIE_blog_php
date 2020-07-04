<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:82:"D:\phpStudy\PHPTutorial\WWW\blog\public/../application/admin\view\article\lst.html";i:1593775970;s:71:"D:\phpStudy\PHPTutorial\WWW\blog\application\admin\view\common\top.html";i:1593714286;s:72:"D:\phpStudy\PHPTutorial\WWW\blog\application\admin\view\common\left.html";i:1593594826;}*/ ?>
<!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>博客文章</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="http://127.0.0.1/blog/public/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="http://127.0.0.1/blog/public/static/admin/style/font-awesome.css" rel="stylesheet">
    <link href="http://127.0.0.1/blog/public/static/admin/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="http://127.0.0.1/blog/public/static/admin/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="http://127.0.0.1/blog/public/static/admin/style/demo.css" rel="stylesheet">
    <link href="http://127.0.0.1/blog/public/static/admin/style/typicons.css" rel="stylesheet">
    <link href="http://127.0.0.1/blog/public/static/admin/style/animate.css" rel="stylesheet">
    <style type="text/css">
        .wh_img{
            width: 100px;
            height: 100px;
        }
    </style>
    
</head>
<body>
	<!-- 头部 -->
    <!-- 头部 -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!--图标-->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="http://127.0.0.1/blog/public/static/admin/images/logo.png" alt="">
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="http://127.0.0.1/blog/public/static/admin/images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span><?php echo \think\Request::instance()->session('username'); ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/logout'); ?>">
                                        退出登录
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/edit',array('id'=>\think\Request::instance()->session('uid'))); ?>">
                                        修改密码
                                    </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>

<!-- /头部 -->
	<!-- /头部 -->
	
	<div class="main-container container-fluid">
		<div class="page-container">
			            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input class="searchinput" type="text">
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <!--Dashboard-->
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text">管理员</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('admin/lst'); ?>">
                                    <span class="menu-text">
                                        管理列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-file-text"></i>
                <span class="menu-text">博客文章</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('article/lst'); ?>">
                                    <span class="menu-text">
                                        文章列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa  fa fa-bars  "></i>
                <span class="menu-text">栏目管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('Cate/lst'); ?>">
                                    <span class="menu-text">
                                        栏目列表                                   </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-link"></i>
                <span class="menu-text">友情链接</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('links/lst'); ?>">
                                    <span class="menu-text">
                                        链接列表                                   </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-tag"></i>
                <span class="menu-text">标签编辑</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('Tags/lst'); ?>">
                                    <span class="menu-text">
                                        标签列表                                </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
    <!-- /Sidebar Menu -->
</div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li>
                        <a href="#">系统</a>
                    </li>
                                        <li class="active">文章列表</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<button type="button" tooltip="添加用户" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo url('article/add'); ?>'"> <i class="fa fa-plus"></i> Add
</button>
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-body">
                <div class="flip-scroll">
                    <table class="table table-bordered table-hover">
                        <thead class="">
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">文章标题</th>
                                <th class="text-center">文章作者</th>
                                <th class="text-center">是否推荐</th>
                                <th class="text-center">缩略图</th>
                                <th class="text-center">所属栏目</th>
                                <th class="text-center">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(is_array($articles) || $articles instanceof \think\Collection || $articles instanceof \think\Paginator): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <tr>
                                <td align="center"><?php echo $vo['id']; ?></td>
                                <td align="center"><?php echo $vo['title']; ?></td>
                                <td align="center"><?php echo $vo['author']; ?></td>
                                <td align="center">
                                <?php if($vo['state'] == 1): ?>
                                    已推荐
                                <?php else: ?>
                                    未推荐
                                <?php endif; ?>
                                </td>
                                <td align="center">
                                    <?php if($vo['pic'] != ''): ?>
                                    <img src="http://127.0.0.1/blog/public/static/<?php echo $vo['pic']; ?>" alt="" class="wh_img">
                                    <?php else: ?>
                                    <img src="http://127.0.0.1/blog/public/static/admin/images/error.png" alt="" class="wh_img">
                                    <?php endif; ?>
                                </td>
                                <th class="text-center">
                                    <?php echo $vo['catename']; ?>
                                </th>
                                <td align="center">
                                    <a href="<?php echo url('article/edit', array('id'=>$vo['id'])); ?>" class="btn btn-primary btn-sm shiny">
                                        <i class="fa fa-edit"></i> 编辑
                                    </a>
                                    <a href="#" onClick="warning('确实要删除吗', '<?php echo url('article/del',array('id'=>$vo['id'])); ?>')" class="btn btn-danger btn-sm shiny">
                                        <i class="fa fa-trash-o"></i> 删除
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
                <div class="flip-scroll">
                    <?php echo $articlePage; ?>
                </div>
            </div>
        </div>
    </div>
</div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
		</div>	
	</div>

	    <!--Basic Scripts-->
    <script src="http://127.0.0.1/blog/public/static/admin/style/jquery_002.js"></script>
    <script src="http://127.0.0.1/blog/public/static/admin/style/bootstrap.js"></script>
    <script src="http://127.0.0.1/blog/public/static/admin/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="http://127.0.0.1/blog/public/static/admin/style/beyond.js"></script>
    


</body></html>