<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
<link href="<?php echo CUSTOM_TEMPLATE_PATH;?>Index/OukanV2/main.css?v=<?php echo SITE_VERSION;?>" rel="stylesheet" type="text/css">
<body id="weisite" style="background:#eee url(<?php echo ($config["background"]); ?>) no-repeat; background-size:100% 100%">
<div class="container">
    <?php if(!empty($category)): ?><section>
    	<div class="lists">
			<ul class="item-ul">
            <?php if(is_array($category)): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="item-li">
                <a class="item" href="<?php echo ($vo["url"]); ?>">
                    <h2 class="click_item_txt"><?php echo ($vo["title"]); ?></h2>
					<span class="icon"></span>
                </a>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
        </div>
    </section><?php endif; ?>
</div>
<!-- 底部导航 -->
<?php echo ($footer_html); ?>
<!-- 统计代码 -->
<?php if(!empty($config["code"])): ?><p class="hide bdtongji">
<?php echo ($config["code"]); ?>
</p><?php endif; ?>
</body>
</html>