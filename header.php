<!DOCTYPE html lang="da">
<html>
	<head>
		<meta charset='UTF-8'>
		<title><?php wp_title( '-', true, 'right' ); bloginfo( 'name' ); ?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
	</head>
	
<body <?php body_class(); ?>>
<div id="wrap">
	<header>
		<div class="container">

			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><h3><?php bloginfo( 'name' ); ?></h3></a>

		    <!-- Menu og Mobil menu -->
			<nav class="navbar navbar-default" role="navigation">
			    <div class="navbar-header">
			        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			        </button>
			    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><span class="glyphicon glyphicon-home"></span></a>
			    </div>

			    <div class="collapse navbar-collapse navbar-ex1-collapse">
			        <?php
			        wp_nav_menu( array(
			            'theme_location' => 'top_menu',
			            'depth' => 2,
			            'container' => false,
			            'menu_class' => 'nav navbar-nav',
			            'fallback_cb' => 'wp_page_menu',
			            'walker' => new wp_bootstrap_navwalker())
			        );
			        ?>
			    </div><!-- /.navbar-collapse --> 
			</nav>
		</div> <!-- /.container -->
	</header>
	<div id="main" class="container">
		<div class="row">