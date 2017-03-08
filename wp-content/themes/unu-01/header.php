<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<!--..................................................................................................-->
<!--..NNNNNNN....NNNN......................PPPPPPPPPP...LLLL..........................................-->
<!--..NNNNNNNN...NNNN.....OOOOOOOO.........PPPP...PPPP..LLLL...AAAAAAAAAA...NNNN.NNNNN....SSSSSSSSSS..-->
<!--..NNNN.NNNN..NNNN...OOOO....OOOO.......PPPP...PPPP..LLLL......... AAAA..NNNNNNNNNNN..SSSS.........-->
<!--..NNNN..NNNN.NNNN..OOOO......OOOO......PPPPPPPPPP...LLLL...AAAAAAAAAAA..NNNN...NNNN...SSSSSSSSS...-->
<!--..NNNN...NNNNNNNN...OOOO....OOOO.......PPPP.........LLLL..AAAAA...AAAA..NNNN...NNNN........SSSSS..-->
<!--..NNNN.....NNNNNN.....OOOOOOOO.........PPPP.........LLLL...AAAAAAA.AAA..NNNN...NNNN..SSSSSSSSSS...-->
<!--..................................................................................................-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/framework.css" type="text/css"> 
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css" type="text/css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/flickity.css" type="text/css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" type="text/css">

		<!-- Plugins -->
		  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.1.1.min.js"></script>
		  <!-- <script src="<?php echo get_template_directory_uri(); ?>/assets/js/smoothscroll.js"></script> -->
		  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/flickity.pkgd.min.js"></script>
		  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/scripts.js"></script>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>


	</head>

	<body <?php body_class(); ?> >

		<div id="container">

			<header class="header">


					<p id="logo" class="h1" ><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>


					<nav role="navigation" >
						<?php wp_nav_menu(array(
    					         'container' => false,                           // remove nav container
    					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
    					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
    					         'menu_class' => 'nav top-nav cf',               // adding custom nav class
    					         'theme_location' => 'main-nav',                 // where it's located in the theme
    					         'before' => '',                                 // before the menu
        			               'after' => '',                                  // after the menu
        			               'link_before' => '',                            // before each link
        			               'link_after' => '',                             // after each link
        			               'depth' => 0,                                   // limit the depth of the nav
    					         'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>

					</nav>


			</header>
