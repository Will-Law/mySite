<?php
/* template: archive.php
 * this template is loaded for all site archives unless overidden with another template
 * typical used for date based archives
 */

/* get the header template */
get_header();

	if( have_posts() ) :

		mpev_filter_form();

		while( have_posts() ) : the_post();

			the_title();

			mpev_event_info();

			the_content();

		endwhile;

	endif;

/* get the footer template */
get_footer();
