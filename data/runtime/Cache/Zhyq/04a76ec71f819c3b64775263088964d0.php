<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
	<html>
	<head>
		<title><?php echo ($site_seo_title); ?> <?php echo ($site_name); ?></title>
		<meta name="keywords" content="<?php echo ($site_seo_keywords); ?>" />
		<meta name="description" content="<?php echo ($site_seo_description); ?>">
		<link href="/themes/simplebootx/Public/Yqjs/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
        <link href="/themes/simplebootx/Public/Yqjs/css/style.css" type="text/css" rel="stylesheet" media="all">
		<script src="/themes/simplebootx/Public/Yqjs/js/jquery-1.11.1.min.js"></script> 
			<?php  function _sp_helloworld(){ echo "hello ThinkCMF!"; } function _sp_helloworld2(){ echo "hello ThinkCMF2!"; } function _sp_helloworld3(){ echo "hello ThinkCMF3!"; } ?>
	<?php $portal_index_lastnews="2"; $portal_hot_articles="1,2"; $portal_last_post="1,2"; $tmpl=sp_get_theme_path(); $default_home_slides=array( array( "slide_name"=>"ThinkCMFX2.1.0发布啦！", "slide_pic"=>$tmpl."Public/images/demo/1.jpg", "slide_url"=>"", ), array( "slide_name"=>"ThinkCMFX2.1.0发布啦！", "slide_pic"=>$tmpl."Public/images/demo/2.jpg", "slide_url"=>"", ), array( "slide_name"=>"ThinkCMFX2.1.0发布啦！", "slide_pic"=>$tmpl."Public/images/demo/3.jpg", "slide_url"=>"", ), ); ?>
	<meta name="author" content="ThinkCMF">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    
    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">

   	<!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->
	<link rel="icon" href="/themes/simplebootx/Public/images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="/themes/simplebootx/Public/images/favicon.ico" type="image/x-icon">
    <link href="/themes/simplebootx/Public/simpleboot/themes/simplebootx/theme.min.css" rel="stylesheet">
    <link href="/themes/simplebootx/Public/simpleboot/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="/themes/simplebootx/Public/simpleboot/font-awesome/4.4.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
	<!--[if IE 7]>
	<link rel="stylesheet" href="/themes/simplebootx/Public/simpleboot/font-awesome/4.4.0/css/font-awesome-ie7.min.css">
	<![endif]-->
	<link href="/themes/simplebootx/Public/css/style.css" rel="stylesheet">
	<style>
		/*html{filter:progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);-webkit-filter: grayscale(1);}*/
		#backtotop{position: fixed;bottom: 50px;right:20px;display: none;cursor: pointer;font-size: 50px;z-index: 9999;}
		#backtotop:hover{color:#333}
		#main-menu-user li.user{display: none}
	</style>
	
	</head>
<body class="body-white">
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
  <div class="container-fluid">
				<div class="gallery">
				    
					<h3>园区景色</h3>
					<div class="gallery-info">
						<div class="col-md-4 galry-grids">
							<a class="b-link-stripe b-animate-go fancybox" href="/themes/simplebootx/Public/images/img22.jpg" data-fancybox-group="gallery" >
								<img src="/themes/simplebootx/Public/images/img22.jpg" class="img-responsive img-style row6" alt="">
								<div class="b-wrapper">
									<span class="b-animate b-from-left    b-delay03 ">
										<img class="img-responsive zoom-img img-circle" src="/themes/simplebootx/Public/images/e.png" alt=""/>
									</span>					
								</div>
							</a>
							<a class="b-link-stripe b-animate-go fancybox" href="/themes/simplebootx/Public/images/img23a.jpg" data-fancybox-group="gallery" >
								<img src="/themes/simplebootx/Public/images/img23a.jpg" class="img-responsive img-style row6" alt="">
								<div class="b-wrapper">
									<span class="b-animate b-from-left    b-delay03 ">
										<img class="img-responsive zoom-img img-circle" src="/themes/simplebootx/Public/images/e.png" alt=""/>
									</span>					
								</div>
							</a>
						</div>
						<div class="col-md-4 galry-grids">
							<a class="b-link-stripe b-animate-go fancybox" href="/themes/simplebootx/Public/images/img5a.jpg" data-fancybox-group="gallery" >
								<img src="/themes/simplebootx/Public/images/img5a.jpg" class="img-responsive img-style row6" alt="">
								<div class="b-wrapper">
									<span class="b-animate b-from-left    b-delay03 ">
										<img class="img-responsive zoom-img img-circle" src="/themes/simplebootx/Public/images/e.png" alt=""/>
									</span>					
								</div>
							</a>
							<a class="b-link-stripe b-animate-go fancybox" href="/themes/simplebootx/Public/images/img12a.jpg" data-fancybox-group="gallery" >
								<img src="/themes/simplebootx/Public/images/img12a.jpg" class="img-responsive img-style row6" alt="">
								<div class="b-wrapper">
									<span class="b-animate b-from-left    b-delay03 ">
										<img class="img-responsive zoom-img img-circle" src="/themes/simplebootx/Public/images/e.png" alt=""/>
									</span>					
								</div>
							</a>
							<a class="b-link-stripe b-animate-go fancybox" href="/themes/simplebootx/Public/images/img3a.jpg" data-fancybox-group="gallery" >
								<img src="/themes/simplebootx/Public/images/img3a.jpg" class="img-responsive img-style row6" alt="">
								<div class="b-wrapper">
									<span class="b-animate b-from-left    b-delay03 ">
										<img class="img-responsive zoom-img img-circle" src="/themes/simplebootx/Public/images/e.png" alt=""/>
									</span>					
								</div>
							</a>
						</div>	
						<div class="col-md-4 galry-grids">
							<a class="b-link-stripe b-animate-go fancybox glry-img1" href="/themes/simplebootx/Public/images/img13a.jpg" data-fancybox-group="gallery" >
								<img src="/themes/simplebootx/Public/images/img13a.jpg" class="img-responsive img-style row6" alt="">
								<div class="b-wrapper">
									<span class="b-animate b-from-left    b-delay03 ">
										<img class="img-responsive zoom-img img-circle" src="/themes/simplebootx/Public/images/e.png" alt=""/>
									</span>					
								</div>
							</a>
							<a class="b-link-stripe b-animate-go fancybox glry-img2" href="/themes/simplebootx/Public/images/img4a.jpg" data-fancybox-group="gallery" >
								<img src="/themes/simplebootx/Public/images/img4a.jpg" class="img-style row6" alt="">
								<div class="b-wrapper">
									<span class="b-animate b-from-left    b-delay03 ">
										<img class="img-responsive zoom-img img-circle" src="/themes/simplebootx/Public/images/e.png" alt=""/>
									</span>					
								</div>
							</a>
							<a class="b-link-stripe b-animate-go fancybox glry-img3" href="/themes/simplebootx/Public/images/img24a.jpg" data-fancybox-group="gallery" >
								<img src="/themes/simplebootx/Public/images/img24a.jpg" class="img-responsive img-style row6" alt="">
								<div class="b-wrapper">
									<span class="b-animate b-from-left    b-delay03 ">
										<img class="img-responsive zoom-img img-circle" src="/themes/simplebootx/Public/images/e.png" alt=""/>
									</span>					
								</div>
							</a>
						</div>	
						<div class="clearfix"> </div>
					</div>					
				</div>
				<!--start-gallery js-->
				<script type="text/javascript" src="/themes/simplebootx/Public/Yqjs/js/jquery.fancybox.js"></script>
					<link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/Yqjs/css/jquery.fancybox.css" media="screen" />
					<script type="text/javascript">
						$(document).ready(function() {
							/*
							*  Simple image gallery. Uses default settings
							*/
						$('.fancybox').fancybox();
						});
				</script>
				<!--//end-gallery js-->
  </div>
  <script src="/themes/simplebootx/Public/simpleboot/bootstrap/js/bootstrap.min.js"> </script>
  <script>
	$(function(){
		$('body').on('touchstart.dropdown', '.dropdown-menu', function (e) { e.stopPropagation(); });
		
		$("#main-menu li.dropdown").hover(function(){
			$(this).addClass("open");
		},function(){
			$(this).removeClass("open");
		});
		
		$.post("<?php echo U('user/index/is_login');?>",{},function(data){
			if(data.status==1){
				if(data.user.avatar){
					$("#main-menu-user .headicon").attr("src",data.user.avatar.indexOf("http")==0?data.user.avatar:"/data/upload/avatar/"+data.user.avatar);
				}
				
				$("#main-menu-user .user-nicename").text(data.user.user_nicename!=""?data.user.user_nicename:data.user.user_login);
				$("#main-menu-user li.login").show();
				
			}
			if(data.status==0){
				$("#main-menu-user li.offline").show();
			}
			
		});	
		;(function($){
			$.fn.totop=function(opt){
				var scrolling=false;
				return this.each(function(){
					var $this=$(this);
					$(window).scroll(function(){
						if(!scrolling){
							var sd=$(window).scrollTop();
							if(sd>100){
								$this.fadeIn();
							}else{
								$this.fadeOut();
							}
						}
					});
					
					$this.click(function(){
						scrolling=true;
						$('html, body').animate({
							scrollTop : 0
						}, 500,function(){
							scrolling=false;
							$this.fadeOut();
						});
					});
				});
			};
		})(jQuery); 
		
		$("#backtotop").totop();
		
		
	});
	</script>
</body>
</html>