<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:80:"D:\phpStudy\PHPTutorial\WWW\blog\public/../application/index\view\tags\tags.html";i:1593679653;s:74:"D:\phpStudy\PHPTutorial\WWW\blog\application\index\view\common\header.html";i:1593619512;s:73:"D:\phpStudy\PHPTutorial\WWW\blog\application\index\view\common\right.html";i:1593615749;s:72:"D:\phpStudy\PHPTutorial\WWW\blog\application\index\view\common\foot.html";i:1590812495;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>博客</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="童老师ThinkPHP交流群：484519446" />
<meta name="description" content="童老师ThinkPHP交流群：484519446" /> 
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link href="http://127.0.0.1/blog/public/static/index/style/lady.css" type="text/css" rel="stylesheet" />
<script type='text/javascript' src='http://127.0.0.1/blog/public/static/index/images/js/ismobile.js'></script>
</head>

<body>
 <div class="ladytop">
	<div class="nav">
		<div class="left"><a href=""><img src="http://127.0.0.1/blog/public/static/index/images/hunshang.png" alt="wed114婚尚"></a></div>
		<div class="right">
			<div class="box">
				<a href="<?php echo url('index/index'); ?>"  rel='dropmenu209'>首页</a>
				<?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<a href="<?php echo url('cate/index',array('cateid'=>$vo['id'])); ?>"  rel='dropmenu209'><?php echo $vo['catename']; ?></a>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
	</div>
</div>

<div class="hotmenu">
	<div class="con">热门标签：
		<?php if(is_array($tags) || $tags instanceof \think\Collection || $tags instanceof \think\Paginator): $i = 0; $__LIST__ = $tags;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tag): $mod = ($i % 2 );++$i;?>
		<a href="<?php echo url('tags/index',array('tag_id'=>$tag['t_id'])); ?>"><?php echo $tag['tagname']; ?></a>
		<?php endforeach; endif; else: echo "" ;endif; ?>
</div>

<!--顶部通栏-->


<!--顶部通栏-->


<div class="position"><a href="<?php echo url('index/index'); ?>">主页</a> > <?php echo $tag_name['tagname']; ?> </div>

<div class="overall">

	<div class="left">

		<?php if(is_array($articles) || $articles instanceof \think\Collection || $articles instanceof \think\Paginator): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article): $mod = ($i % 2 );++$i;?>
		<div class="xnews2">
			<div class="pic">
				<a target="_blank" href="20160920156279.html">
					<?php if($article['pic'] != ''): ?>
					<img src="http://127.0.0.1/blog/public/static/<?php echo $article['pic']; ?>" alt=""/>
					<?php else: ?>
					<img src="http://127.0.0.1/blog/public/static/index/images/error.png" alt="">
					<?php endif; ?>
				</a>
			</div>
			<div class="dec">
				<h3>
					<a target="_blank" href="<?php echo url('Article/article',array('article_id'=>$article['id'])); ?>"><?php echo $article['title']; ?></a>
				</h3>
			<div class="time">发布时间：<?php echo date("Y-m-d",$article['time']); ?>
			</div>
			<p><?php echo $article['desc']; ?></p>
			<div class="time">
				<a href="<?php echo url('tags/index',array('tag_id'=>$article['t_id'])); ?>"><?php echo $article['tagname']; ?></a>
			</div>
			</div>
		</div>
		<?php endforeach; endif; else: echo "" ;endif; ?>

		<div class=""><?php echo $articles->render(); ?></div>

	</div>
	
	<div class="right">
    <!--右侧各种广告-->
    <!--猜你喜欢-->
    <div id="hm_t_57953">
        <div style="display: block; margin: 0px; padding: 0px; float: none; clear: none; overflow: hidden; position: relative; border: 0px none; background: transparent none repeat scroll 0% 0%; max-width: none; max-height: none; border-radius: 0px; box-shadow: none; transition: none 0s ease 0s ; text-align: left; box-sizing: content-box; width: 300px;">
            <div class="hm-t-container" style="width: 298px;">
                <div class="hm-t-main">
                    <div class="hm-t-header">热门点击</div>
                    <div class="hm-t-body">
                        <ul class="hm-t-list hm-t-list-img">
                            <?php if(is_array($click_article) || $click_article instanceof \think\Collection || $click_article instanceof \think\Paginator): $i = 0; $__LIST__ = $click_article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c_article): $mod = ($i % 2 );++$i;?>
                            <li class="hm-t-item hm-t-item-img">
                                <a data-pos="0" title="<?php echo $c_article['title']; ?>" target="_blank" href="<?php echo url('Article/article',array('article_id'=>$c_article['id'])); ?>" class="hm-t-img-title" style="visibility: visible;">
                                    <span><?php echo $c_article['title']; ?></span>
                                </a>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="height:15px"></div>

    <div id="hm_t_57953">
        <div style="display: block; margin: 0px; padding: 0px; float: none; clear: none; overflow: hidden; position: relative; border: 0px none; background: transparent none repeat scroll 0% 0%; max-width: none; max-height: none; border-radius: 0px; box-shadow: none; transition: none 0s ease 0s ; text-align: left; box-sizing: content-box; width: 300px;">
            <div style="width: 298px;" class="hm-t-container">
                <div class="hm-t-main">
                    <div class="hm-t-header">推荐阅读</div>
                    <div class="hm-t-body">
                        <ul class="hm-t-list hm-t-list-img">
                            <?php if(is_array($state_article) || $state_article instanceof \think\Collection || $state_article instanceof \think\Paginator): $i = 0; $__LIST__ = $state_article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s_article): $mod = ($i % 2 );++$i;?>
                            <li class="hm-t-item hm-t-item-img">
                                <a style="visibility: visible;" class="hm-t-img-title" href="<?php echo url('Article/article',array('article_id'=>$s_article['id'])); ?>" target="_blank" title="<?php echo $s_article['title']; ?>" data-pos="0">
                                    <span><?php echo $s_article['title']; ?></span>
                                </a>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="height:15px"></div>

    <div id="bdcs">
        <div class="bdcs-container">
            <meta content="IE=9" http-equiv="x-ua-compatible">   <!-- 嵌入式 -->
            <div id="default-searchbox" class="bdcs-main bdcs-clearfix">
                <div id="bdcs-search-inline" class="bdcs-search bdcs-clearfix">
                    <form id="bdcs-search-form" autocomplete="off" class="bdcs-search-form" target="_blank" method="get" action="<?php echo url('search/index'); ?>">
                        <input type="text" placeholder="请输入关键词" id="bdcs-search-form-input" class="bdcs-search-form-input" name="keyword" autocomplete="off" style="line-height: 30px; width:220px;">
                        <input type="submit" value="搜索" id="bdcs-search-form-submit" class="bdcs-search-form-submit bdcs-search-form-submit-magnifier">
                    </form>
                </div>
                <div id="bdcs-search-sug" class="bdcs-search-sug" style="top: 552px; width: 239px;">
                    <ul id="bdcs-search-sug-list" class="bdcs-search-sug-list"></ul>
                </div>
            </div>
        </div>
    </div>

    <div style="height:15px"></div>

</div>
	
</div>
 <div class="footerd">
	<ul>
		<li>Copyright &#169; 2008-2016  all rights reserved 版权所有   <a href="http://www.miibeian.gov.cn" target="_blank" rel="nofollow">蜀icp备08107937号</a></li>
	</ul>
</div>




</body>
</html>