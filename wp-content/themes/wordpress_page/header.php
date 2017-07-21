<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Wordpress Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   	<script src="http://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="<?php bloginfo('template_url')?>/js/app.js" type="text/javascript"></script>    
    <link rel="stylesheet" href=<?php bloginfo('template_url')?>/font-awesome/css/font-awesome.min.css?>
    <link rel="stylesheet" href=<?php bloginfo('stylesheet_url') ?>><!--Displays the primary CSS (usually style.css) file URL of the active theme.-->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700&subset=latin-ext" rel="stylesheet">
</head>
<body>
	<header id="header" class="background-bar">
		<div class="top-bar">
			<div class="wrapper">
				<div class="inline">
                    <a href="https://www.facebook.com" target="_blank"><span class="icon"><i class="fa fa-facebook" aria-hidden="true"></i></span></a>
                    <a href="https://www.twitter.com" target="_blank"><span class="icon"><i class="fa fa-twitter" aria-hidden="true"></i></span></a>
                    <a href="https://www.pinterest.com" target="_blank"><span class="icon"><i class="fa fa-pinterest" aria-hidden="true"></i></span></a>
					<a href="https://www.google.pl/search?q=camera+retro&rlz=1C1LOQA_enPL723PL723&oq=camera+retro&aqs=chrome..69i57j0l5.2440j0j4&sourceid=chrome&ie=UTF-8" target="_blank"><span class="icon"><i class="fa fa-camera-retro" aria-hidden="true"></i></span></a>
				</div>
				<nav class="inline alignright">
					<ul class="menu">
                        <?php 
                            wp_nav_menu(); //or wp_nav_menu(array( 'menu' => 'menu' ) );
                        ?>
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