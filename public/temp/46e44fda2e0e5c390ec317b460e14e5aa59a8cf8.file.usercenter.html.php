<?php /* Smarty version Smarty-3.0.8, created on 2015-03-05 07:17:07
         compiled from "/Users/Haku/Documents/Github/BiliFun/tpl/usercenter.html" */ ?>
<?php /*%%SmartyHeaderCode:65635658054f79273810167-03462896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46e44fda2e0e5c390ec317b460e14e5aa59a8cf8' => 
    array (
      0 => '/Users/Haku/Documents/Github/BiliFun/tpl/usercenter.html',
      1 => 1425511003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65635658054f79273810167-03462896',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/css/individualcenter.css">
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/js/individualcenter.js"></script>
<title>夢の源</title>
</head>
<body style="overflow: hidden;">
	<!-- bg -->
	<div class="center-bg"></div>

	<!-- main -->
	<div class="center-main">

		<!-- left -->
		<div class="left-blur"></div>
		<div id="center-left" class="affix">
			<a href="#"><img id="i-img" class="img-circle" title="点我更改头像"></a>
			<a href="#"><p id="i-name">月落丶音阑</p></a>
			<ul id="left-content" class="text-center" style="background: none;">
				<li></li>
				<li><a href="#i-1"><p id="i-homepage" onmouseover="change1()" onmouseout="change11()">--主页--</p></a></li>
				<li><a href="#i-2"><p id="i-submission" onmouseover="change2()" onmouseout="change12()">--视频--</p></a>
					<ul>
						<li><a href="#i-2-1"><p id="upload" onmouseover="change3()" onmouseout="change13()">-上传-</p></a></li>
						<li><a href="#i-2-2"><p id="manage" onmouseover="change4()" onmouseout="change14()">-管理-</p></a></li>
						<li><a href="#i-2-3"><p id="record" onmouseover="change5()" onmouseout="change15()">-记录-</p></a></li>
					</ul>
				</li>
				<li><a href="#i-3"><p id="i-collection" onmouseover="change6()" onmouseout="change16()">--收藏--</p></a></li>
				<li><a href="#i-4"><p id="i-care" onmouseover="change7()" onmouseout="change17()">--关注--</p></a></li>
				<li><a href="#i-5"><p id="i-information" onmouseover="change8()" onmouseout="change18()">--信息--</p></a></li>
			</ul>
		</div>
		
		<!-- right -->
		<div class="my-box">
		<div id="left-content">

			<!-- 1 -->
			<div id="i-1">
				<h4 class="text-center h4-color">主页</h4>
				<div class="top-box">
					<div class="col-md-3"><a href="#"><h6>关注 &nbsp;&nbsp;<small>0</small></h6></a></div>
					<div class="col-md-3"><a href="#"><h6>粉丝 &nbsp;&nbsp;<small>0</small></h6></a></div>
					<div class="col-md-3"><a href="#"><h6>收藏 &nbsp;&nbsp;<small>0</small></h6></a></div>
					<div class="col-md-3"><a href="#"><h6>视频 &nbsp;&nbsp;<small>0</small></h6></a></div>
				</div>
				
				<h4 class="my-tag h4-color">丨动态丨</h4>
				<div class="container">
					<ul class="nav navbar-nav">
            <li class="my-btn btn-act">全部</li>
            <li class="my-btn">我的关注</li>
            <li class="my-btn">与我相关</li>
          </ul>
				</div>
				<hr>
				<!-- 全部 -->
				<div id="i-1-1" class="panel">

		  		<div class="panel-body">
		  	 		<h3>
		  	 			<!-- title -->
		  	  		<a href=""> title</a>
		  	  	</h3>
		  	  	<!-- content -->
		  	  	<div>a</div>
		  	  	<span class = "time"></span>
		  		</div>

				</div>
				<!-- 我的关注 -->
				<div id="i-1-2" class="panel">

		  		<div class="panel-body">
		  	 		<h3>
		  	 			<!-- title -->
		  	  		<a href=""> title</a>
		  	  	</h3>
		  	  	<!-- content -->
		  	  	<div>b</div>
		  	  	<span class = "time"></span>
		  		</div>

				</div>
				<!-- 与我相关 -->
				<div id="i-1-3" class="panel">

		  		<div class="panel-body">
		  	 		<h3>
		  	 			<!-- title -->
		  	  		<a href=""> title</a>
		  	  	</h3>
		  	  	<!-- content -->
		  	  	<div>c</div>
		  	  	<span class = "time"></span>
		  		</div>

				</div>
			</div>

			<!-- 2 -->
			<div id="i-2">
				<h4 class="text-center h4-color">视频</h4>
				<div class="top-box">
					<div class="col-md-6"><a href="#"><h6>已投稿 &nbsp;&nbsp;<small>0</small></h6></a></div>
					<div class="col-md-6"><a href="#"><h6>审核中 &nbsp;&nbsp;<small>0</small></h6></a></div>
				</div>
				
				<!-- 上传 -->
				<div id="i-2-1">
					<h4 class="my-tag h4-color">丨上传丨</h4>
					<form class="navbar-form my-form" role="search">
						<p>视频源地址：</p>
            <input type="text" placeholder="在此填写视频源地址" class="form-control" />            
            <button type="submit" class="btn">下一步</button>
          </form>
				</div>

				<!-- 管理 -->
				<div id="i-2-2">
					<h4 class="my-tag h4-color">丨管理丨</h4>
					<p>您尚未投稿!</p>
				</div>

				<!-- 记录 -->
				<div id="i-2-3">
					<h4 class="my-tag h4-color">丨记录丨</h4>
					<p>您尚未投稿!</p>
				</div>
				
			</div>

			<!-- 3 -->
			<div id="i-3">
				<h4 class="text-center h4-color">收藏</h4>
				<div class="top-box">
					<div class="row">
        <div class="col-xs-6 col-md-3">
          <a href="#" class="thumbnail">
            <img src="img/anime/img1.png" data-src="holder.js/100%x180" alt="...">
            <span>...</span>
          </a>
          
        </div>
        <div class="col-xs-6 col-md-3">
          <a href="#" class="thumbnail">
            <img src="img/anime/img2.png" data-src="holder.js/100%x180" alt="...">
            <span>...</span>
          </a>
        </div>
        <div class="col-xs-6 col-md-3">
          <a href="#" class="thumbnail">
            <img src="img/anime/img5.png" data-src="holder.js/100%x180" alt="...">
            <span>...</span>
          </a>
        </div>
        <div class="col-xs-6 col-md-3">
          <a href="#" class="thumbnail">
            <img src="img/anime/img3.png" data-src="holder.js/100%x180" alt="...">
            <span>...</span>
          </a>
        </div>
      </div>
      <div class="row row-2">
        
        <div class="col-xs-6 col-md-3">
          <a href="#" class="thumbnail">
            <img src="img/anime/img4.png" data-src="holder.js/100%x180" alt="...">
            <span>...</span>
          </a>
        </div>
        <div class="col-xs-6 col-md-3">
          <a href="#" class="thumbnail">
            <img src="img/anime/img6.png" data-src="holder.js/100%x180" alt="...">
            <span>...</span>
          </a>
        </div>
      </div>
				</div>
			</div>

			<!-- 4 -->
			<div id="i-4">
				<h4 class="text-center h4-color">关注</h4>
				<div class="top-box">
					
				</div>
				
			</div>

			<!-- 5 -->
			<div id="i-5">
				<h4 class="text-center h4-color">信息</h4>
				<div class="top-box">
					
				</div>

			</div>



			



			<?php $_template = new Smarty_Internal_Template("footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

		</div>
		</div>

	</div>
	
<script>
var i_hp = document.getElementById('i-homepage');
var i_sm = document.getElementById('i-submission');
var i_u = document.getElementById('upload');
var i_m = document.getElementById('manage');
var i_r = document.getElementById('record');
var i_cl = document.getElementById('i-collection');
var i_cr = document.getElementById('i-care');
var i_in = document.getElementById('i-information');
var i_1 = document.getElementById('i-1');
var i_2 = document.getElementById('i-2');
var i_3 = document.getElementById('i-3');
var i_4 = document.getElementById('i-4');
var i_5 = document.getElementById('i-5');

i_hp.onclick = function() {
	i_1.style.display = "block";
	i_2.style.display = "none";
	i_3.style.display = "none";
	i_4.style.display = "none";
	i_5.style.display = "none";
}
i_sm.onclick = function() {
	i_1.style.display = "none";
	i_2.style.display = "block";
	i_3.style.display = "none";
	i_4.style.display = "none";
	i_5.style.display = "none";
}
i_u.onclick = function() {
	i_1.style.display = "none";
	i_2.style.display = "block";
	i_3.style.display = "none";
	i_4.style.display = "none";
	i_5.style.display = "none";
}
i_m.onclick = function() {
	i_1.style.display = "none";
	i_2.style.display = "block";
	i_3.style.display = "none";
	i_4.style.display = "none";
	i_5.style.display = "none";
}
i_r.onclick = function() {
	i_1.style.display = "none";
	i_2.style.display = "block";
	i_3.style.display = "none";
	i_4.style.display = "none";
	i_5.style.display = "none";
}
i_cl.onclick = function() {
	i_1.style.display = "none";
	i_2.style.display = "none";
	i_3.style.display = "block";
	i_4.style.display = "none";
	i_5.style.display = "none";
}
i_cr.onclick = function() {
	i_1.style.display = "none";
	i_2.style.display = "none";
	i_3.style.display = "none";
	i_4.style.display = "block";
	i_5.style.display = "none";
}
i_in.onclick = function() {
	i_1.style.display = "none";
	i_2.style.display = "none";
	i_3.style.display = "none";
	i_4.style.display = "none";
	i_5.style.display = "block";
}

</script>
</body>
</html>