<?php
/*******************************************************
* Add local database name and set up site with an apache
  server and gasmask
*******************************************************/
define( 'DB_NAME', 'mysite' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'root' );
define( 'DB_HOST', 'localhost' ); // Probably 'localhost'

/*******************************************************
* set a constant to indicate local / staging server
*******************************************************/
define( 'WP_LOCAL_DEV', true );
define( 'WP_STAGING_DEV', false );
