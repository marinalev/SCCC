<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="robots" content="noindex,nofollow" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title><?php include('includes/titles.php'); ?> | uWaver Ltd.</title>
		<link rel="shortcut icon" href="images/favicon.ico"/>
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet'>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!-- Begin Styles -->
		<link rel="stylesheet" href="css/master.styles.css">
		<!-- End Styles -->
		
		<script>
			<!--
			
			/*
			JavaScript Image slideshow:
			By JavaScript Kit (Source: http://www.javascriptkit.com/script/script2/jsslide.shtml)
			*/
			
			var slideimages=new Array()
			var slidelinks=new Array()
			function slideshowimages(){
			for (i=0;i<slideshowimages.arguments.length;i++){
			slideimages[i]=new Image()
			slideimages[i].src=slideshowimages.arguments[i]
			}
			}
			
			function slideshowlinks(){
			for (i=0;i<slideshowlinks.arguments.length;i++)
			slidelinks[i]=slideshowlinks.arguments[i]
			}
			
			function gotoshow(){
			if (!window.winslide||winslide.closed)
			winslide=window.open(slidelinks[whichlink])
			else
			winslide.location=slidelinks[whichlink]
			winslide.focus()
			}
			
			//-->
			</script>
		
	</head>
	
	<body>
		<!-- Begin Header -->
		<header id="main_header">
			<div id="logo">
				<a href="index.php"><img src="images/uwaver_logo.png" alt="company logo"/></a>
			</div>
			<?php include('includes/main_nav.php'); ?>
		</header>
		<!-- End Header -->
		
		<!-- Begin Main Content -->
