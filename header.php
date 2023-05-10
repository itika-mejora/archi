<!DOCTYPE html>
<html <?php language_attributes() ?>>

	<head>
		<title>Architecture Portfolio</title>
		<meta charset="<?php bloginfo('charset'); ?>">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="format-detection" content="telephone=no">
	    <meta name="apple-mobile-web-app-capable" content="yes">
	    <meta name="author" content="">
	    <meta name="keywords" content="">
	    <meta name="description" content="">
		

		<!-- script
		================================================== -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/modernizr.js"></script>

	    
        <?php wp_head(); ?>
	</head>
    <body <?php echo body_class(); ?>>
    <div class="nav nav-overlay">
	<div class="nav__content">
		<ul class="nav__list">
		<?php wp_nav_menu(array(
						'theme_location' => 'Header Menu',
						
						'container' => false,
						
					)); ?>
			
		</ul>
	</div>
</div>

<header id="header">
	<div id="header-wrap">
		<nav id="navbar">
			<div class="main-logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">A.</a>
			</div>
		</nav>
		

		<div class="action-menu">

			<div class="side-nav-bar">
			  <input id="menu-toggle" type="checkbox" />
				<label class="menu-btn" for="menu-toggle">
				<span></span>
			   </label>
			</div>
			<!--sidenavbar-->

		</div><!--action-menu-->

	</div><!--header-wrap-->
</header>