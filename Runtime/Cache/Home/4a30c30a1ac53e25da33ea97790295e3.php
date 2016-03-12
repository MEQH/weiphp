<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title><?php echo empty($page_title) ? C('WEB_SITE_TITLE') : $page_title; ?></title>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">
    <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
    <meta content="no-cache" http-equiv="pragma">
    <meta content="0" http-equiv="expires">
    <meta content="telephone=no, address=no" name="format-detection">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="stylesheet" type="text/css" href="/weiphp/Public/Home/css/mobile_module.css?v=<?php echo SITE_VERSION;?>" media="all">
    <script type="text/javascript">
		//静态变量
		var IMG_PATH = "/weiphp/Public/Home/images";
		var STATIC_PATH = "/weiphp/Public/static";
		var SITE_URL = "<?php echo SITE_URL;?>";
		var WX_APPID = "<?php echo ($jsapiParams["appId"]); ?>";
		var	WXJS_TIMESTAMP='<?php echo ($jsapiParams["timestamp"]); ?>'; 
		var NONCESTR= '<?php echo ($jsapiParams["nonceStr"]); ?>'; 
		var SIGNATURE= '<?php echo ($jsapiParams["signature"]); ?>';
	</script>
    <script type="text/javascript" src="/weiphp/Public/static/jquery-2.0.3.min.js"></script>
	<script type="text/javascript" src="http://yaotv.qq.com/shake_tv/include/js/lib/zepto.1.1.4.min.js"></script>
	<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
	<script type="text/javascript" src="minify.php?f=/weiphp/Public/Home/js/prefixfree.min.js,/weiphp/Public/Home/js/m/dialog.js,/weiphp/Public/Home/js/m/flipsnap.min.js,/weiphp/Public/Home/js/m/mobile_module.js&v=<?php echo SITE_VERSION;?>"></script>
</head>    
<link href="<?php echo CUSTOM_TEMPLATE_PATH;?>Index/Rain/index.css?v=<?php echo SITE_VERSION;?>" rel="stylesheet" type="text/css">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="apple-touch-icon-precomposed" href="i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
    <link rel="stylesheet" href="<?php echo CUSTOM_TEMPLATE_PATH;?>Index/Rain/css/amui.all.min.css">
    <link rel="stylesheet" href="<?php echo CUSTOM_TEMPLATE_PATH;?>Index/Rain/css/app.css">
    <script src="<?php echo CUSTOM_TEMPLATE_PATH;?>Index/Rain/js/extend/iscroll.js"></script>

    </style>
</head>

<body id="index_cont">
<!--catgray start-->
<div class="food_cat" id="scroller">

    <?php if(!empty($category)): ?><section>
            <?php if(is_array($category)): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                    <a href="<?php echo ($vo["url"]); ?>">
                        <img src="<?php echo ($vo["icon"]); ?>"/>
                        <span class="title"><?php echo ($vo["title"]); ?></span>
                    </a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </section><?php endif; ?>
</div>
<!--catgray end-->

<!--slider start-->
<div data-am-widget="slider" class="am-slider am-slider-a1" data-am-slider='{&quot;directionNav&quot;:false}'>
    <?php if(!empty($slideshow)): ?><section class="banner">
            <ul class="am-slides">
                <?php if(is_array($slideshow)): $i = 0; $__LIST__ = $slideshow;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                        <a href="<?php echo ($vo["url"]); ?>"><img src="<?php echo ($vo["img"]); ?>"/></a>
                        <span class="title"><?php echo ($vo["title"]); ?></span>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </section><?php endif; ?>
    <!--slider end-->
    <?php if(!empty($config["code"])): ?><p class="hide bdtongji">
            <?php echo ($config["code"]); ?>
        </p><?php endif; ?>
    <!--nav-->
    <?php echo ($footer_html); ?>
    <!--nav end-->

    <script src="http://libs.baidu.com/zepto/1.1.3/zepto.min.js"></script>
    <script>
        window.Zepto || document.write('<script src="js/zepto.min.js?1.1.4"><\/script>')
    </script>
    <script src="<?php echo CUSTOM_TEMPLATE_PATH;?>Index/Rain/js/amui.js"></script>
    <script src="<?php echo CUSTOM_TEMPLATE_PATH;?>Index/Rain/js/app.js"></script>
    <script src="<?php echo CUSTOM_TEMPLATE_PATH;?>Index/Rain/js/extend/iscroll_init.js"></script>
    <script src="<?php echo CUSTOM_TEMPLATE_PATH;?>Index/Rain/js/extend/imagesloaded.pkgd.min.js"></script>
    <script>
        //        $(function(){
        //            var myScroll=new iScroll("index_cont");
        //            myScroll.disable();
        //            var listScroll = new iScroll('index_cont');
        //            
        //            $('.am-offcanvas-content li').height($('.am-offcanvas-content li').width());
        //            $('.am-offcanvas-content li img').width($('.am-offcanvas-content li').width());
        //            $('.am-offcanvas-content li img').height($('.am-offcanvas-content li').width());
        //            myScroll.refresh();
        //
        //        });


        $(function () {

//            $(".am-menu-nav li:last").find("a").css("border-tottom","border-top: 1px solid rgba(0,0,0,0.3)");

            //iscroll
            var listScroll = new iScroll('index_cont',{
                hScroll:true
                vScroll:false
            });
        });
    </script>
</body>
</html>