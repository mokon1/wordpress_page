<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Wordpress Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   	<script src="http://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
    <script src="js/app.js" type="text/javascript"></script>
    <script type="text/javascript" src="wp-content/themes/wordpress_page/js/app.js"></script>
    <!--<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="main.css"> -->
    
    <link rel="stylesheet" href=<?php bloginfo('template_url')?>/font-awesome/css/font-awesome.min.css?>
    <link rel="stylesheet" href=<?php bloginfo('stylesheet_url') ?>> <!-- DODANE 1!! -->
    
    
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700&subset=latin-ext" rel="stylesheet">
</head>
<body>
	<header id="header" class="background-bar">
		<div class="top-bar">
			<div class="wrapper">
				<div class="inline">
					<span class="icon"><i class="fa fa-facebook" aria-hidden="true"></i></span>
					<span class="icon"><i class="fa fa-twitter" aria-hidden="true"></i></span>
					<span class="icon"><i class="fa fa-pinterest" aria-hidden="true"></i></span>
					<span class="icon"><i class="fa fa-camera-retro" aria-hidden="true"></i></span>
				</div>
				<nav class="inline alignright">
					<ul class="menu">
						<li class="menu-item"><a href="#">home</a></li>
						<li class="menu-item"><a href="#">about</a></li>
						<li class="menu-item"><a href="#">contact</a></li>
						<li class="menu-item"><a href="#">all posts</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="wrapper">
			<div class="logo-box aligncenter">
				<p class="aside-text">since<span class="logo"><i class="fa fa-coffee" aria-hidden="true"></i></span>2001</p>
				<h1>hygge</h1>
				<p class="sentence">Your happiness. We care.</p>
			</div>
		</div>
	</header>