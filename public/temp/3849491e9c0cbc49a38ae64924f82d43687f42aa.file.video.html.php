<?php /* Smarty version Smarty-3.0.8, created on 2015-03-03 06:53:19
         compiled from "/Users/Haku/Documents/Github/BiliFun/tpl/video.html" */ ?>
<?php /*%%SmartyHeaderCode:116083645754f4e9df7398e9-27905546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3849491e9c0cbc49a38ae64924f82d43687f42aa' => 
    array (
      0 => '/Users/Haku/Documents/Github/BiliFun/tpl/video.html',
      1 => 1425336797,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116083645754f4e9df7398e9-27905546',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/Users/Haku/Documents/Github/BiliFun/common/SpeedPHP/Drivers/Smarty/plugins/modifier.date_format.php';
?><?php $_template = new Smarty_Internal_Template("header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/css/video.css">
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('__RESOURCE')->value;?>
/js/barrage.js"></script>
<title><?php echo $_smarty_tpl->getVariable('prow')->value['video_name'];?>
</title>
</head>

<body>
	<header id="my-header">
		<?php $_template = new Smarty_Internal_Template("navbar.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	</header>

	<!-- 弹幕画布 -->
	<div id="danmaku"></div>

	<!-- main -->
	<div class="myvideo-content">

		<!-- 视频信息 -->
		<div class="row">
			<div class="col-md-10">
				<p class="lead"><?php echo $_smarty_tpl->getVariable('crow')->value['category'];?>
</p>
				<span class="person-name"><?php echo $_smarty_tpl->getVariable('prow')->value['author'];?>
</span><span>发布于</span><span class="time"><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('prow')->value['addtime'],"%Y-%m-%d %H:%M:%S");?>
</span>
			</div>
			<div class="col-md-2">
				<a href="#">收藏</a>
				<a href="#">评论</a>
			</div>
		</div>

		<!-- 播放器 -->
		<div class="video">
			<div class="container-1">
	        <div class="container-left" id="danmaku-display">
	            <video id="video-main" src="<?php echo $_smarty_tpl->getVariable('__VIDEO')->value;?>
/<?php echo $_smarty_tpl->getVariable('prow')->value['url'];?>
" type="video/mp4" controls>
	                Your browser dosen't support HTML5 Video
	            </video>
	            <div class="container-bottom">
	                <div class="video-bottom-left">梦想+∞</div>
	                <input type="text" placeholder=" 此处填充弹幕..." />
	                <input type="button" value="发射!">
	            </div>
	        </div>
	        <div class="container-right">
	            <div class="right-top">
	                <div class="right-top-left">
	                    <span>弹幕:233</span>
	                    <br/><span>观众:23333</span>
	                    <br/><span>播放:233</span>
	                </div>
	                <div class="right-top-right">
	                    <span>预留地</span>
	                </div>
	            </div>
	            <div class="right-bottom">
	                <div class="right-bottom-top">
	                    <ul>
	                        <li id="video-time">时间</li>
	                        <li id="comment">评论</li>
	                        <li id="send-time">发送时间</li>
	                    </ul>
	                </div>
	                <div class="right-bottom-list">
	                    <table class="danmaku-table">
	                        
	                    </table>
	                </div>
	            </div>
	        </div>
   	 	</div>
	</div>

		<!-- 标签 -->
		<div class="video-tag">
			<p><span> 标签：</span><?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['bft']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['bft']['name'] = 'bft';
$_smarty_tpl->tpl_vars['smarty']->value['section']['bft']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('tags')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['bft']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['bft']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bft']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['bft']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['bft']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bft']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['bft']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['bft']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['bft']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bft']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['bft']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['bft']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['bft']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['bft']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['bft']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bft']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['bft']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['bft']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['bft']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['bft']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['bft']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['bft']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['bft']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bft']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['bft']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bft']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['bft']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['bft']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bft']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['bft']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['bft']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['bft']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['bft']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['bft']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['bft']['total']);
?><a href="#"> <?php echo $_smarty_tpl->getVariable('tags')->value[$_smarty_tpl->getVariable('smarty')->value['section']['bft']['index']]['words'];?>
 </a> <?php endfor; endif; ?> </p>
			<hr>
			<p><?php echo $_smarty_tpl->getVariable('prow')->value['description'];?>
</p>
		</div>

		<hr>

		<!-- 评论区 -->
		<div>
			<p>说两句呗~o(*￣▽￣*)ブ</p>
			<form class="say-form">
				<textarea class="form-control" rows="4" name="message"></textarea>
				<button type="submit" class="btn btn-primary"> 发表评论 </button>
			</form>
			<h6>评论区</h6>
			<hr>
			<div class="panel panel-default">

		  	<div class="panel-body">
		  		<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['bfc']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['bfc']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('comment')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['bfc']['name'] = 'bfc';
$_smarty_tpl->tpl_vars['smarty']->value['section']['bfc']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['bfc']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bfc']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['bfc']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['bfc']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bfc']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['bfc']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['bfc']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['bfc']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bfc']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['bfc']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['bfc']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['bfc']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['bfc']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['bfc']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bfc']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['bfc']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['bfc']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['bfc']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['bfc']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['bfc']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['bfc']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['bfc']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bfc']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['bfc']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bfc']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['bfc']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['bfc']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['bfc']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['bfc']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['bfc']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['bfc']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['bfc']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['bfc']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['bfc']['total']);
?>
	   			<span class="badge badge-info"><?php echo $_smarty_tpl->getVariable('comment')->value[$_smarty_tpl->getVariable('smarty')->value['section']['bfc']['index']]['reply_id'];?>
</span>
	    		<a href=""><?php echo $_smarty_tpl->getVariable('comment')->value[$_smarty_tpl->getVariable('smarty')->value['section']['bfc']['index']]['replyer'];?>
</a>
	    		<span class="time"><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('comment')->value[$_smarty_tpl->getVariable('smarty')->value['section']['bfc']['index']]['addtime'],"%Y-%m-%d %H:%M:%S");?>
</span>
	    		<span><a class="btn-quote">[回复]</a></span>
		    	<div class="comment-content">
		    		<p><?php echo $_smarty_tpl->getVariable('comment')->value[$_smarty_tpl->getVariable('smarty')->value['section']['bfc']['index']]['contents'];?>
<p>
		    	</div>
		    	<?php endfor; endif; ?>
		  	</div>

			</div>
		</div>
	
	<?php $_template = new Smarty_Internal_Template("footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

</body>
</html>