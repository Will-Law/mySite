<?php
/* template: 404.php
 * this template is loaded when a user encounters a 404 error
 */

/* get the header template */
get_header();

	?>

	<div class="container content-area" id="primary">

		<section class="error-404 not-found">

			<header class="page-header">

				<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'pxltheme_textdomain' ); ?></h1>

			</header><!-- page-header -->

			<div class="entry-content" style="text-align: center;">

				<p><?php _e( 'It looks like nothing is here, Click below to return home', 'pxltheme_textdomain' ); ?></p>

				<a href=<?php echo get_home_url(); ?> class=button>Take me back!</a>

			</div><!-- // entry-content -->

		</section><!-- // error-404 no-found -->

	</div><!-- // content-area -->

	<?php

/* get the footer template */
get_footer();
