<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta charset="utf-8">
	<title>入驻申请</title>
		<meta name="keywords" content="<?php echo ($site_seo_keywords); ?>" />
		<meta name="description" content="<?php echo ($site_seo_description); ?>">
		<link href="/themes/simplebootx/Public/css/style.css" rel="stylesheet">
		<link href="/themes/simplebootx/Public/simpleboot/themes/simplebootx/theme.min.css" rel="stylesheet">
		<link href="/themes/simplebootx/Public/simpleboot/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<style>
		/*html{filter:progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);-webkit-filter: grayscale(1);}*/
		#backtotop{position: fixed;bottom: 50px;right:20px;display: none;cursor: pointer;font-size: 50px;z-index: 9999;}
		#backtotop:hover{color:#333}
		#main-menu-user li.user{display: none}
	    </style>
		<link rel="stylesheet" media="screen" href="/themes/simplebootx/Public/Rzsq/css/zzsc.css" />
</head>
<body class="body" background="http://thecodeplayer.com/uploads/media/gs.png">
    <?php echo hook('body_start');?>
<div class="navbar navbar-fixed-top">
   <div class="navbar-inner">
     <div class="container">
       <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </a>
       <a class="brand" href="/"><img src="/themes/simplebootx/Public/images/logo.png"/></a>
       <div class="nav-collapse collapse" id="main-menu">
       	<?php
 $effected_id="main-menu"; $filetpl="<a href='\$href' target='\$target'>\$label</a>"; $foldertpl="<a href='\$href' target='\$target' class='dropdown-toggle' data-toggle='dropdown'>\$label <b class='caret'></b></a>"; $ul_class="dropdown-menu" ; $li_class="" ; $style="nav"; $showlevel=6; $dropdown='dropdown'; echo sp_get_menu("main",$effected_id,$filetpl,$foldertpl,$ul_class,$li_class,$style,$showlevel,$dropdown); ?>
		
		<ul class="nav pull-right" id="main-menu-user">
			<li class="dropdown user login">
	            <a class="dropdown-toggle user" data-toggle="dropdown" href="#">
	            <img src="/themes/simplebootx//Public/images/headicon.png" class="headicon"/>
	            <span class="user-nicename"></span><b class="caret"></b></a>
	            <ul class="dropdown-menu pull-right">
	               <li><a href="<?php echo U('user/center/index');?>"><i class="fa fa-user"></i> &nbsp;个人中心</a></li>
	               <li class="divider"></li>
	               <li><a href="<?php echo U('user/index/logout');?>"><i class="fa fa-sign-out"></i> &nbsp;退出</a></li>
	            </ul>
          	</li>
          	<li class="dropdown user offline">
	            <a class="dropdown-toggle user" data-toggle="dropdown" href="#">
	           		<img src="/themes/simplebootx//Public/images/headicon.png" class="headicon"/>登录<b class="caret"></b>
	            </a>
	            <ul class="dropdown-menu pull-right">
	               <li><a href="<?php echo leuu('user/login/index');?>"><i class="fa fa-sign-in"></i> &nbsp;登录</a></li>
	               <li class="divider"></li>
	               <li><a href="<?php echo leuu('user/register/index');?>"><i class="fa fa-user"></i> &nbsp;注册</a></li>
	            </ul>
          	</li>
		</ul>
		<div class="pull-right">
        	<form method="post" class="form-inline" action="<?php echo U('portal/search/index');?>" style="margin:18px 0;">
				 <input type="text" class="" placeholder="请输入关键字" name="keyword" value="<?php echo I('get.keyword');?>"/>
				 <input type="submit" class="btn btn-info" value="搜索" style="margin:0"/>
			</form>
		</div>
       </div>
     </div>
   </div>
 </div>
	<!-- progressbar -->
	<form id="Progress">
		<ul id="progressbar">
			<li class="active">入驻申请</li>
			<li>房屋交接确认</li>
			<li>手续办理</li>
			<li>收集资料</li>
			<li>装修审批</li>
			<li>消防审核</li>
			<li>办理装修手续</li>
			<li>进场装修</li>
			<li>验收完工</li>
		</ul>
	</form>
	<form id="msform">
	<!-- fieldsets -->
		<fieldset>
			<h2 class="fs-title">入驻申请</h2>
			<h3 class="fs-subtitle">步骤一</h3>
			<input type="text" name="email" placeholder="入驻时间" />
			<input type="button" name="next" class="next action-button" value="下一步" />
		</fieldset>
		<fieldset>
			<h2 class="fs-title">房屋交接确认</h2>
			<h3 class="fs-subtitle">步骤二</h3>
			<input type="text" name="email" placeholder="入驻时间" />
			<input type="button" name="previous" class="previous action-button" value="上一步" />
			<input type="button" name="next" class="next action-button" value="下一步" />
		</fieldset>
		<fieldset>
			<h2 class="fs-title">手续办理</h2>
			<h3 class="fs-subtitle">步骤三</h3>
			<input type="text" name="email" placeholder="入驻时间" />
			<textarea name="address" placeholder="Address"></textarea>
			<input type="button" name="previous" class="previous action-button" value="上一步" />
			<input type="button" name="next" class="next action-button" value="下一步" />
		</fieldset>
		<fieldset>
			<h2 class="fs-title">收集资料</h2>
			<h3 class="fs-subtitle">步骤四</h3>
			<input type="text" name="email" placeholder="入驻时间" />
			<textarea name="address" placeholder="Address"></textarea>
			<input type="button" name="previous" class="previous action-button" value="上一步" />
			<input type="button" name="next" class="next action-button" value="下一步" />
		</fieldset>
		<fieldset>
			<h2 class="fs-title">装修审批</h2>
			<h3 class="fs-subtitle">步骤五</h3>
			<input type="text" name="email" placeholder="入驻时间" />
			<textarea name="address" placeholder="Address"></textarea>
			<input type="button" name="previous" class="previous action-button" value="上一步" />
			<input type="button" name="next" class="next action-button" value="下一步" />
		</fieldset>
		<fieldset>
			<h2 class="fs-title">消防审核</h2>
			<h3 class="fs-subtitle">步骤六</h3>
			<input type="text" name="email" placeholder="入驻时间" />
			<textarea name="address" placeholder="Address"></textarea>
			<input type="button" name="previous" class="previous action-button" value="上一步" />
			<input type="button" name="next" class="next action-button" value="下一步" />
		</fieldset>
		<fieldset>
			<h2 class="fs-title">办理装修手续</h2>
			<h3 class="fs-subtitle">步骤七</h3>
			<input type="text" name="email" placeholder="入驻时间" />
			<textarea name="address" placeholder="Address"></textarea>
			<input type="button" name="previous" class="previous action-button" value="上一步" />
			<input type="button" name="next" class="next action-button" value="下一步" />
		</fieldset>
		<fieldset>
			<h2 class="fs-title">进场装修</h2>
			<h3 class="fs-subtitle">步骤八</h3>
			<input type="text" name="email" placeholder="入驻时间" />
			<textarea name="address" placeholder="Address"></textarea>
			<input type="button" name="previous" class="previous action-button" value="上一步" />
			<input type="button" name="next" class="next action-button" value="下一步" />
		</fieldset>
		<fieldset>
			<h2 class="fs-title">验收完工</h2>
			<h3 class="fs-subtitle">步骤九</h3>
			<input type="text" name="email" placeholder="入驻时间" />
			<textarea name="address" placeholder="Address"></textarea>
			<input type="button" name="previous" class="previous action-button" value="上一步" />
			<input type="submit" name="submit" class="submit action-button" value="提交" />
		</fieldset>
	</form>
	<script src="/themes/simplebootx/Public/Rzsq/js/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="/themes/simplebootx/Public/Rzsq/js/jquery.easing.min.js" type="text/javascript"></script>
	<script src="/themes/simplebootx/Public/Rzsq/js/zzsc.js" type="text/javascript"></script>

</body>
</html>