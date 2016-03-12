<?php if (!defined('THINK_PATH')) exit();?><!-- 头部 -->
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
<link rel="stylesheet" type="text/css" href="<?php echo ADDON_PUBLIC_PATH;?>/xydzp.css" media="all">
<body class="xydzp-end">
<div class="container">
	<!--
	 <div class="common_header">
            <a class="back" href="javascript:history.back();">&nbsp;</a>
            我的中奖纪录
    </div>
    -->
	<div class="boxcontent">
		<div class="box">
			<div class="title">
				<span class="span1"><span class="span2">中奖记录</span>&nbsp;</span>
			</div>
            <div class="Detail">
            <table class="table table-bordered">
                <tr>
                    <!--<th>活动</th>-->
                    <th>奖品</th>
                    <th>中奖时间</th>
                </tr>
            <?php if(is_array($zjuserlist)): $i = 0; $__LIST__ = $zjuserlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$jp): $mod = ($i % 2 );++$i;?><tr>
                    <!--<td><?php echo ($jp["event"]); ?></td>-->
                    <td><?php echo ($jp["title"]); ?></td>
                    <td><?php echo (time_format($jp["zjdate"])); ?></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
            </div>
		</div>
	</div>
	<p class="copyright"><?php echo ($system_copy_right); ?></p>        
</div>
<!-- Wap页面脚部 -->
<div style="height:0; visibility:hidden; overflow:hidden;">
<?php echo ($tongji_code); ?>
</div>
</body>
</html>