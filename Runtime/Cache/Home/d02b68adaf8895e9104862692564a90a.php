<?php if (!defined('THINK_PATH')) exit();?><!-- 头部 -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="/weiphp/Public/Home/css/mobile_module.css?v=<?php echo SITE_VERSION;?>">
   <link rel="stylesheet" type="text/css" href="<?php echo ADDON_PUBLIC_PATH;?>/xydzp.css?v=<?php echo SITE_VERSION;?>">
   <script type="text/javascript">
		//静态变量
		var IMG_PATH = "/weiphp/Public/Home/images";
		var STATIC_PATH = "/weiphp/Public/static";
		var WX_APPID = "<?php echo ($jsapiParams["appId"]); ?>";
		var	WXJS_TIMESTAMP='<?php echo ($jsapiParams["timestamp"]); ?>'; 
		var NONCESTR= '<?php echo ($jsapiParams["nonceStr"]); ?>'; 
		var SIGNATURE= '<?php echo ($jsapiParams["signature"]); ?>';
	</script>
   <script type="text/javascript" src="<?php echo ADDON_PUBLIC_PATH;?>/js/jquery-1.4.4.min.js?v=<?php echo SITE_VERSION;?>"></script>
    <script type="text/javascript" src="minify.php?f=/weiphp/Public/Home/js/prefixfree.min.js,/weiphp/Public/Home/js/m/dialog.js,/weiphp/Public/Home/js/m/flipsnap.min.js,/weiphp/Public/Home/js/m/mobile_module.js?v=<?php echo SITE_VERSION;?>"></script>
   <script type="text/javascript" src="<?php echo ADDON_PUBLIC_PATH;?>/js/jquery.easing.min.js?v=<?php echo SITE_VERSION;?>"></script>
   <script type="text/javascript" src="<?php echo ADDON_PUBLIC_PATH;?>/js/jQueryRotate.2.2.js?v=<?php echo SITE_VERSION;?>"></script>
  
   <script type="text/javascript" src="<?php echo ADDON_PUBLIC_PATH;?>/js/initinfo.js?v=<?php echo SITE_VERSION;?>"></script>
    <script type="text/javascript" src="<?php echo ADDON_PUBLIC_PATH;?>/js/init.js?v=<?php echo SITE_VERSION;?>"></script>
   <script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
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
</head>
<?php if($isend): ?><body class="xydzp-end">
<div id="card_url" style="display:none"></div>
<div class="main">
  <div class="banner"> <img src="<?php echo ADDON_PUBLIC_PATH;?>/images/end.jpg"> </div>
  <div class="content" style=" margin-top:10px">
  	<DIV class="boxcontent">
  	   <DIV class="box">
        <div class="title"><span class="span1"><span class="span2">活动结束说明</span>&nbsp;</span></div>
        <div class="Detail">
          <p> 亲，活动已经结束，请继续关注我们的后续活动哦。</p>
        </div>
      </div>
    </div>
   <div style="margin: 20px 15px 30px 15px;text-align:center;">
    <input type=button  value="查看我的中奖记录" onClick="location.href='<?php echo U('zjinfo?id='.$xydzp_id);?>'"  class="btn yellow_btn" style="padding:6px 0; font-size:16px">
  </div>
  </div>
</div>
<FOOTER style="text-align: center; color: rgb(255, 216, 0); margin-right: 20px;">
  <p class="copyright"><?php echo ($system_copy_right); ?></p>
</FOOTER>
<!-- Wap页面脚部 -->
<div style="height:0; visibility:hidden; overflow:hidden;">
<?php echo ($tongji_code); ?>
</div>
</body>
<?php else: ?>

<BODY class="xydzp-winning" style="background:#63a5fe url(<?php echo (get_cover_url($xydzp_detail["background"])); ?>) no-repeat center top; background-size:100% auto; padding-top:80px;"><!--<?php echo ADDON_PUBLIC_PATH;?>/images/top_bg.png?20141231-->

<script type="text/javascript">
   var jplist=<?php echo ($jplist); ?>;
   var joinurl="<?php echo ($joinurl); ?>";
   var posturl="<?php echo ($isinfo_url); ?>";
   var zpimg ="http://7teaoa.com1.z0.glb.clouddn.com/2015-01-04_54a8ba12f2dd6.png";	
</script>
<DIV class="main wx_page">
  <DIV id="outercont">
    <DIV id="outer-cont"  style="z-index:10">
      <DIV id="outer">
        <canvas id="wheelcanvas" width="250" height="250"> </canvas>
      </DIV>
    </DIV>
    <DIV id="inner-cont" style="z-index:1000">
      <DIV id="inner"> <canvas style="background:url(<?php echo ADDON_PUBLIC_PATH;?>/images/start.png) no-repeat; background-size:100% 100%;" width="80" height="106" id="startbtn" data-src="" ></canvas> </DIV>
    </DIV>
  </DIV>
  <DIV class="content">
  	<?php if(!empty($cjnum)): ?><p class="leftCount">您还有 <SPAN id="count"> <?php echo ($cjnum); ?> </SPAN> 次机会 </p><?php endif; ?>
    <DIV class="boxcontent boxyellow" id="result" style="display: none;">
      <DIV class="box">
        <DIV class="title"><span class="span1"><span class="span2">恭喜你中奖了</span>&nbsp;</span> </DIV>
        <DIV class="Detail">
          <P> 你中了： <SPAN class="red" id="prizetype"> 感谢参与 </SPAN> </P>
        </DIV>
      </DIV>
    </DIV>
    <DIV class="boxcontent boxyellow">
      <DIV class="box">
        <DIV class="title"><span class="span1"><span class="span2">参与方法</span>&nbsp;</span></DIV>
        <DIV class="Detail" style="word-wrap:break-word;"> <?php echo (htmlspecialchars_decode($hddata["guiz"])); ?> </DIV>
      </DIV>
    </DIV>
    <DIV class="boxcontent boxyellow">
      <DIV class="box">
        <DIV class="title"><span class="span1"><span class="span2">最新中奖</span>&nbsp;</span></DIV>
        <DIV class="Detail">
          <?php if(!empty($zjuserlist)): ?><div class="newestList">
              <table style="margin:0 auto;" class="table table-bordered">
                <?php if(is_array($zjuserlist)): $i = 0; $__LIST__ = $zjuserlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$jp): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($jp["truename"]); ?></td>
                    <td><?php echo ($jp["title"]); ?></td>
                    <td><?php echo (time_format($jp["zjdate"])); ?></td>
                  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
              </table>
              </div><?php endif; ?>
          <?php if(empty($zjuserlist)): ?><p class="empty_tips">还没有人中奖</p><?php endif; ?>
        </DIV>
      </DIV>
    </DIV>
  </DIV>
  <DIV class="boxcontent boxyellow">
    <DIV class="box">
      <DIV class="title"><span class="span1"><span class="span2">奖项设置</span>&nbsp;</span></DIV>
      <DIV class="Detail" style="text-align:center;">
       <?php if(!empty($jplists)): ?><ul style="margin:0 auto;">
              <?php if(is_array($jplists)): $i = 0; $__LIST__ = $jplists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$jp): $mod = ($i % 2 );++$i; if($jp["isdf"] == '0'): ?><li style="float:left; margin:5px;">
                    <div><img style="border:2px solid #FFF;" src="<?php echo (get_cover_url($jp['pic'])); ?>" width="82px" height="100px"/></div>
                    <P><?php echo ($jp["title"]); ?></P>
                  </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </ul><?php endif; ?>
        <?php if(empty($jplists)): ?><p class="empty_tips">还没有设置奖项</p><?php endif; ?>
        <div style="clear:both;"></div>
      </DIV>
    </DIV>
  </DIV>
</DIV>
<DIV class="boxcontent boxyellow">
  <DIV class="box">
    <DIV class="title"><span class="span1"><span class="span2">活动介绍</span>&nbsp;</span></DIV>
    <DIV class="Detail">
      <P> <?php echo (htmlspecialchars_decode($hddata["des"])); ?> </P>
    </DIV>
  </DIV>
</DIV>
<DIV class="boxcontent boxyellow">
  <DIV class="box">
    <DIV class="title"><span class="span1"><span class="span2">活动说明</span>&nbsp;</span></DIV>
    <DIV class="Detail">
      <P class="red"> 本次活动每天可以转<?php echo ($hddata["choujnum"]); ?>次! <br/>
        <?php if(!empty($cjnum)): ?>您还有 <SPAN id="count"> <?php echo ($cjnum); ?> </SPAN> 次机会.<?php endif; ?>
      </P>
      <P> 开始时间: <?php echo ($hddata["start_date"]); ?><br/>
        结束时间: <?php echo ($hddata["end_date"]); ?> </P>
    </DIV>
  </DIV>
  </DIV>
  <div style="margin:20px 15px 20px 15px;text-align:center;">
    <input type=button  value="查看我的中奖记录" onClick="location.href='<?php echo U('zjinfo?id='.$xydzp_id);?>'"  class="btn yellow_btn" style="padding:10px 0; font-size:16px">
  </div>
<!--  <div style="margin: 0 15px 30px 15px;text-align:center;">
    <input type=button  value="进入微首页" onClick="location.href='<?php echo addons_url('WeiSite://WeiSite/index');?>'"  class="btn yellow_btn" style="padding:6px 0; font-size:16px">
  </div>-->

<div id="dail2" style="width: 100%;font-size:20px;opacity: 1;color:#FFF; display: none;left:0px;top:0px;">
  <div style=" margin:0px auto;width:300px; margin-top:40pt;"> <img src="http://7teaoa.com1.z0.glb.clouddn.com/2015-01-04_54a8b9c210077.png" width="100%"/>
    <div class="p_10"> 
      <!-- 表单 --> 
      <!-- 基础文档模型 -->
      <div id="tab1" class="tab-pane">
        <div class="form-item cf">
          <label class="item-label">姓名</label>
          <div class="controls">
            <input type="text" class="text input-medium" name="truename" id="truename" value="" />
          </div>
        </div>
        <div class="form-item cf">
          <label class="item-label">联系电话</label>
          <div class="controls">
            <input type="text" class="text input-large" name="mobile" id="mobile" value="" />
          </div>
        </div>
        <div class="form-item cf tb pt_10">
          <input type="hidden" class="text input-large" name="id" value="<?php echo ($_GET['id']); ?>">
          <button class="home_btn submit-btn ajax-post mb_10 flex_1" id="btn_submit" type="button" target-form="form-horizontal">提  交</button>
        </div>
      </div>
    </div>
  </div>
</div>
<audio id="playyy" src="<?php echo ADDON_PUBLIC_PATH;?>/images/m.mp3" style="display:none;"> </audio>
<FOOTER style="text-align: center; color: rgb(255, 216, 0); margin-right: 20px;">
  <p class="copyright"><?php echo ($system_copy_right); ?></p>
</FOOTER>
<!-- Wap页面脚部 -->
<div style="height:0; visibility:hidden; overflow:hidden;">
<?php echo ($tongji_code); ?>
</div>
</BODY><?php endif; ?>
</HTML>