<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php

		/**
		 * @hook wp_head
		 * this runs the wp_head hooked used by plugin to add content here
		 * the themes css file style.css is hooked in here using wp_enqueue_style
		 */
		wp_head();

	?>

	<script type="text/javascript">grunticon(["<?php echo get_template_directory_uri(); ?>/assets/images/svg/grunticons/icons.data.svg.css", "<?php echo get_template_directory_uri(); ?>/assets/images/svg/grunticons/icons.data.png.css", "<?php echo get_template_directory_uri(); ?>/assets/images/svg/grunticons/icons.fallback.css"], grunticon.svgLoadedCallback );</script>
	<noscript id="grunticon-fallback"><link href="<?php echo get_template_directory_uri(); ?>/assets/images/svg/grunticons/icons.fallback.css" rel="stylesheet"></noscript>

</head>

<body <?php body_class(); ?>>

	<a class="jump-to-content sr-only show-on-focus" tabindex="1" href="#main-content">Skip to main content</a>

	<input type="checkbox" id="menu-toggle">

	<div class="container-all">

	<header class="header">
		<div class="header-container">

			<a class=logo href="<?php bloginfo('url'); ?>"><img src='<?php echo get_template_directory_uri() . '/assets/images/svg/logo.svg' ?>'></a>

			<label for="menu-toggle" class="menu-button">
				<div class="hamburger-icon"></div>

				<a href="#menu-toggle" class="menu-trigger menu-open">
					<span class="sr-only">Open Menu</span>
				</a>

				<a href="#" class="menu-trigger menu-close">
					<span class="sr-only">Close Menu</span>
				</a>
			</label>


			<?php

				wp_nav_menu(
					array(
						'theme_location' 	=> 'primary_nav',
						'container' 			=> 'nav',
						'container_id'		=> 'primary-nav',
						'container_class'	=> 'site-navigation navigation',
						'menu_id' 				=> 'primary-menu',
						'fallback_cb'			=> false
					)
				);

			?>

			<div class=menu-cta>
 				<a>Book Now</a>
 			</div>

		</div>
	</header>
		<div id="main-content" class="container-page">
