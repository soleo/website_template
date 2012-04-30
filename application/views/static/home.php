<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $title; ?></title>
	    <meta property="wb:webmaster" content="8a4b8902becd11b9" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="Personal Website">
		<meta name="author" content="Soleo Shao">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style type="text/css">
        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }
        </style>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/bootstrap.min.css" ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/bootstrap-responsive.min.css" ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/style.css" ?>">
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Droid+Sans|PT+Sans|Oswald:400,700|Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
	</head>
<body>
	<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
	<div class="container">
	<!-- Phone/Tablet Button -->
	<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-list icon-white"></span></a>
	<!-- Branding -->
	<a class="brand" href="<?php echo base_url() ?>" title="soleoshao.com" rel="home">Soleo Shao</a>
	<div class="nav-collapse">
	<!-- Menu: io-nav-top -->
	<ul id="menu-main-menu" class="nav"><li><a href="<?php echo base_url() ?>">Home</a></li>
	<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
	<ul class="dropdown-menu">
	<li><a href="#">About Me</a></li>
	<li class="divider"></li>
	<li><a title="Twitter" href="http://twitter.com/soleoshao" onclick="javascript:_gaq.push(['_trackEvent','outbound-menu','http://twitter.com']);">on Twitter</a></li>
	<li><a href="https://www.facebook.com/shaoxinjiang" onclick="javascript:_gaq.push(['_trackEvent','outbound-menu','http://www.facebook.com']);">on Facebook</a></li>
	<li><a href="http://www.renren.com/shaoxinjiang" onclick="javascript:_gaq.push(['_trackEvent','outbound-menu','http://www.renren.com']);">on RenRen</a></li>
	<li><a href="http://www.weibo.com/u/1914162540" onclick="javascript:_gaq.push(['_trackEvent','outbound-menu','http://www.weibo.com']);">on Weibo</a></li>
	</ul>
	</li>
	<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Projects <b class="caret"></b></a>
	<ul class="dropdown-menu">
	<li><a href="#">Codes</a></li>
	<li class="divider"></li>
	<li><a href="#">on GitHub</a></li>
	<li><a href="#">on BitBucket</a></li>
	</ul>
	</li>
	<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Misc <b class="caret"></b></a>
	<ul class="dropdown-menu">
	<li><a href="#">Cooking</a></li>
	<li><a href="#">Photography</a></li>
	</ul>
	</li>

	</ul>
	<!-- Menu: Login -->
	<ul id="menu-login" class="nav pull-right"><li class="dropdown" id="login">
	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Login <b class="caret"></b></a>
	<div class="dropdown-menu io-login">
	<p class="visible-desktop">Enter your details here to log into <strong><?php echo base_url() ?></strong>.</p>
	<form class="form-horizontal form-inline" method="post" action="<?php echo base_url() ?>login">
	<input type="hidden" name="redirect_to" value="/">
	<div class="input-prepend" style="display: block;"><span class="add-on"><i class="icon-user"></i></span><input type="text" name="log" id="user_login" class="input-small" placeholder="username"></div>
	<div class="input-prepend" style="display: block;"><span class="add-on"><i class="icon-lock"></i></span><input type="password" name="pwd" id="user_pass" class="input-small" placeholder="password"></div>
	<button type="submit" class="btn btn-success pull-right">log in <i class="icon-ok icon-white"></i></button>
	</form>
	</div>
	</li></ul>
	<!-- Menu: Search Box -->
	<form id="menu-search" class="navbar-search pull-right" method="get" role="search" action="<?php echo base_url()?>search"><input type="text" name="s" id="s" value="" class="search-query span2" placeholder="Search"></form>
	<!-- Close Navigation Bar -->
	</div></div></div></div>
</body>
</html>
