<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title></title>
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
<link href="<?php echo CUSTOM_TEMPLATE_PATH;?>Index/youdian/index.css?v=<?php echo SITE_VERSION;?>" rel="stylesheet" type="text/css">
<body id="weisite">
	<!--	<link rel="stylesheet" href="css/index.css" />-->
	</head>
	<body>
		<header>


			<div class="fl">
				<img src="<?php echo CUSTOM_TEMPLATE_PATH;?>Index/youdian/logo.png" />
			</div>
			<div class="fr">
				<img src="<?php echo CUSTOM_TEMPLATE_PATH;?>Index/youdian/tag.png" />
			</div>
		</header>
		



		
		<div class="main">
			<div class="nav">
				<img src="<?php echo CUSTOM_TEMPLATE_PATH;?>Index/youdian/banner1.jpg" />
			</div>
			<div class="newGoods">
				<ul>
					<li><a href="#">
						<img src="<?php echo CUSTOM_TEMPLATE_PATH;?>Index/youdian/class1.png" />
						<p>优典奶茶</p>
					</a></li>
					<li><a href="#">
						<img src="<?php echo CUSTOM_TEMPLATE_PATH;?>Index/youdian/class2.png" />
						<p>草莓蛋糕</p>
					</a></li>
					<li><a href="#">
						<img src="<?php echo CUSTOM_TEMPLATE_PATH;?>Index/youdian/class3.png" />
						<p>提拉米苏</p>
					</a></li>
					<li><a href="#">
						<img src="<?php echo CUSTOM_TEMPLATE_PATH;?>Index/youdian/class4.png" />
						<p>瑞士莲</p>
					</a></li>
				</ul>
			</div>
			<div class="classGoods">
				<ul>
					<li><a href="#">
						<img src="<?php echo CUSTOM_TEMPLATE_PATH;?>Index/youdian/xidian.jpg" />
						<p>西点</p>
					</a></li>
					<li><a href="#">
						<img src="<?php echo CUSTOM_TEMPLATE_PATH;?>Index/youdian/birth.jpg" />
						<p>生日蛋糕</p>
					</a></li>
					<li><a href="#">
						<img src="<?php echo CUSTOM_TEMPLATE_PATH;?>Index/youdian/drink.jpg" />
						<p>饮品</p>
					</a></li>
					<li><a href="#">
						<img src="<?php echo CUSTOM_TEMPLATE_PATH;?>Index/youdian/mianbao.jpg" />
						<p>面包</p>
					</a></li>
					<li><a href="#">
						<img src="<?php echo CUSTOM_TEMPLATE_PATH;?>Index/youdian/cookie.jpg" />
						<p>干点</p>
					</a></li>
					<li><a href="#">
						<img src="<?php echo CUSTOM_TEMPLATE_PATH;?>Index/youdian/qia.jpg" />
						<p>巧克力</p>
					</a></li>
					<li><a href="#">
						<img src="<?php echo CUSTOM_TEMPLATE_PATH;?>Index/youdian/dangao.jpg" />
						<p>慕丝切块</p>
					</a></li>
					<li><a href="#">
						<img src="<?php echo CUSTOM_TEMPLATE_PATH;?>Index/youdian/news.jpg" />
						<p>明星单品</p>
					</a></li>
				</ul>
			</div>
			<footer>
				<p>
					 优典烘焙坚持零添加、顶级食材、当日鲜做三大原则，拥有世界上最奢侈的蛋糕胚、中国最纯正的黑森林、可以改变你传统印象的奶油蛋糕……优典——爱的味道！这里有最好吃的蛋糕和面包！
					<br/>优典烘焙地址：<strong> 郑港七路与郑港七街交叉口（港区中心小学斜对面）</strong>
					<br/>甜蜜电话：<strong> 0371-56012333</strong>
				</p>

			</footer>
		</div>
<!-- 底部导航 -->
<?php echo ($footer_html); ?>
<!-- 统计代码 -->
<?php if(!empty($config["code"])): ?><p class="hide bdtongji">
<?php echo ($config["code"]); ?>
</p><?php endif; ?>
</body>
</html>
</html>