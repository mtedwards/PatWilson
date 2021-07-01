<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	
	<!-- Set the viewport width to device width for mobile -->
	
	<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
  
	<!-- Included CSS Files -->
	<link href='http://fonts.googleapis.com/css?family=Numans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	<meta name="norton-safeweb-site-verification" content="l88q9c56-94wkuzu62yv864p21wyfnd-jatducnwaolyye9gj8bqxbmz6lhq4ik-3c2hh6b1usfhcdo4h9pgsbu5tyspnyj6y7po4jvmaaymiu8qkyicfx3-wmznxfpq" />
	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<?php wp_head(); ?>
	<style>
	.welcome .eight .welcome-quote {
	  position: static;
	  text-align: center;
	  padding-top: 10%;
	}
	</style>
</head>

<body <?php body_class(); ?>>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-96703068-1', 'auto');
  ga('send', 'pageview');

</script>

	<!-- Begin Container -->
	<div class="container">
		<!-- Header Row -->
		<div class="row">
				<!-- Header Column -->
				<div class="twelve columns" id="access" role="navigation">
					<!-- Site Description & Title -->
					<hgroup id="header">
						<h1><a href="<?php echo site_url(); ?>"><?php bloginfo('title'); ?></a></h1>
						<a class="shop button radius feature" href="<?php bloginfo('url'); ?>/shop">Shop</a>
					</hgroup>

					<!-- Navigation --> 					
 				    <?php wp_nav_menu( array( 'theme_location' => 'header-menu-left','menu_class' => 'nav-bar', 'container' => 'nav') ); ?>
 				    <?php wp_nav_menu( array( 'theme_location' => 'header-menu-right','menu_class' => 'nav-bar', 'container' => 'nav') ); ?>
				
				</div>
				<!-- Header Column -->
				
		</div>
		<!-- Header Row -->
		
		<!-- Main Row -->
		<div class="row">
		
		
				