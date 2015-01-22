<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PuppyPower 4-H">
    <link rel="shortcut icon" href="<?php bloginfo('template_url');?>/ico/favicon.png">

    <title><?php bloginfo("name") . wp_title('|'); ?></title>	
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url');?>/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/icomoon.css">
    <link href="<?php bloginfo('template_url');?>/css/animate-custom.css" rel="stylesheet">


    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    
  
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/modernizr.custom.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php bloginfo('template_url');?>/js/html5shiv.js"></script>
      <script src="<?php bloginfo('template_url');?>/js/respond.min.js"></script>
    <![endif]-->
	<?php wp_enqueue_script( 'jquery' ); ?>
	<?php wp_head(); ?>
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#navbar-main">
  
  
  	<div id="navbar-main">
      <!-- Fixed navbar -->
    <div class="navbar  navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon icon-menu2" style="font-size:30px; color:#3498db;"></span>
          </button>
          <a class="navbar-brand hidden-xs hidden-sm smoothScroll" href="<?php bloginfo('url');?>/#home"><img class="img-responsive" src="<?php bloginfo('template_url');?>/img/wordmark-logo-flat.png"></a>
        </div>
		<div class="row">
		<div class="container">
			<div class="top-nav pull-right">
				<span class="login"><a href="#" class="smoothScroll">Log In</a></span>   <span class="donate"><a href="#about" class="smoothScroll">Donate</a></span>
			</div>
		</div>	
		</div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
			<li> <a href="<?php bloginfo('url');?>/#about" class="smoothScroll"> About</a></li>
			<li> <a href="<?php bloginfo('url');?>/#get-involved" class="smoothScroll"> Get Involved</a></li>
			<li> <a href="<?php bloginfo('url');?>/blog" class="smoothScroll"> Blog</a></li>
			<li> <a href="<?php bloginfo('url');?>/#contact" class="smoothScroll"> Contact Us</a></li>
		  </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    </div>

  
