<?php
/**
 * this is the main index file for this theme
 * this file is never actually loaded due to the presence of other theme files
 * see here to an explanation: https://johnblackbourn.com/ascii-wordpress-template-hierarchy
 */

/* WordPress template hierarchy as of WordPress 4.0
is_404() -------------------------------------------------------------------------------------------------> 404.php
is_search() ----------------------------------------------------------------------------------------------> search.php
is_front_page() ------------------------------------------------------------------------------------------> front-page.php
is_home() ------------------------------------------------------------------------------------------------> home.php
is_page() ---------------> {page template} -----------------> page-{slug}.php ----------> page-{id}.php --> page.php

is_attachment() ---------> {mime-type}.php * ---------------> attachment.php ----------------------------\
is_single() -------------> single-{post_type}.php --------------------------------------------------------> single.php

is_post_type_archive() --> archive-{post_type}.php ----------------------------------------------------\
is_tax() ----------------> taxonomy-{taxonomy}-{slug}.php --> taxonomy-{taxonomy}.php --> taxonomy.php -\
is_category() -----------> category-{slug}.php -------------> category-{id}.php --------> category.php --\
is_tag() ----------------> tag-{slug}.php ------------------> tag-{id}.php -------------> tag.php --------> archive.php
is_author() -------------> author-{nicename}.php -----------> author-{id}.php ----------> author.php ----/
is_date() ---------------> date.php --------------------------------------------------------------------/
is_archive() ------------------------------------------------------------------------------------------/
* The logic in {mime-type}.php is reverse of what you'd expect. See https://core.trac.wordpress.org/ticket/15337
*/