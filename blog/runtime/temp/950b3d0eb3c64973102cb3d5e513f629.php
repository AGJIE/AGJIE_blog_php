<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"D:\phpStudy\PHPTutorial\WWW\blog\public/../application/admin\view\login\login.html";i:1593768032;}*/ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><!--Head--><head>
    <meta charset="utf-8">
    <title>博客管理后台登录</title>
    <meta name="description" content="login page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="http://127.0.0.1/blog/public/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="http://127.0.0.1/blog/public/static/admin/style/font-awesome.css" rel="stylesheet">
    <!--Beyond styles-->
    <link id="beyond-link" href="http://127.0.0.1/blog/public/static/admin/style/beyond.css" rel="stylesheet">
    <link href="http://127.0.0.1/blog/public/static/admin/style/demo.css" rel="stylesheet">
    <link href="http://127.0.0.1/blog/public/static/admin/style/animate.css" rel="stylesheet">
</head>
<!--Head Ends-->
<!--Body-->

<body>
    <div class="login-container animated fadeInDown">
        <form action="" method="post">
            <div class="loginbox bg-white">
                <div class="loginbox-title">登录文章管理系统</div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="账号" name="username" type="text">
                </div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="密码" name="password" type="password">
                </div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="验证码" name="code" type="text">
                </div>
                <div class="loginbox-textbox">
                    <img src="<?php echo captcha_src(); ?>" alt="验证码" onclick="this.src='<?php echo captcha_src(); ?>?+Math.random();'" style="cursor: pointer"/>
                </div>

                <div class="loginbox-submit">
                    <input class="btn btn-primary btn-block" value="登录" type="submit">
                </div>
                <div class="logobox">
                    <p class="text-center">欢迎来到，博客后台系统</p>
                </div>
            </div>

        </form>
    </div>
    <!--Basic Scripts-->
    <script src="http://127.0.0.1/blog/public/static/admin/style/jquery.js"></script>
    <script src="http://127.0.0.1/blog/public/static/admin/style/bootstrap.js"></script>
    <script src="http://127.0.0.1/blog/public/static/admin/style/jquery_002.js"></script>
    <!--Beyond Scripts-->
    <script src="http://127.0.0.1/blog/public/static/admin/style/beyond.js"></script>




</body><!--Body Ends--></html>