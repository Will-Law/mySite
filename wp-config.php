<?php
/*******************************************************************************
* Load database info and local development parameters
********************************************************************************/
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	include( dirname( __FILE__ ) . '/local-config.php' );
} else {

	/* set constants for local and staging to false - we are live! */
	define( 'WP_LOCAL_DEV', false );
	define( 'WP_STAGING_DEV', false );

	/* db details for live production server */
	define( 'DB_NAME', 'willia81_mysite' );
	define( 'DB_USER', 'willia81_prsonal' );
	define( 'DB_PASSWORD', 'Monkeys1' );
	define( 'DB_HOST', 'localhost' ); // Probably 'localhost'
}


/********************************************************************************
* Custom Content Directory
********************************************************************************/
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );


/********************************************************************************
* You almost certainly do not want to change these
********************************************************************************/
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

/********************************************************************************
* Salts, for security - https://api.wordpress.org/secret-key/1.1/salt
********************************************************************************/
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

/********************************************************************************
* Table prefix
********************************************************************************/
$table_prefix  = 'site_';

/********************************************************************************
* Language
********************************************************************************/
define( 'WPLANG', '' );

/********************************************************************************
remove file editor in WordPress
********************************************************************************/
define( 'DISALLOW_FILE_EDIT', true );

/********************************************************************************
* prevent auto updating of wordpress
********************************************************************************/
define( 'WP_AUTO_UPDATE_CORE', false );

/********************************************************************************
* limit the number of post revision to store
********************************************************************************/
define( 'WP_POST_REVISIONS', 15 );

/********************************************************************************
* lets clear the trash every half a month too
********************************************************************************/
define( 'EMPTY_TRASH_DAYS', 14 );

/********************************************************************************
* set to force ssl admin - not on local devs
********************************************************************************/
if(defined( 'WP_LOCAL_DEV' ) && !WP_LOCAL_DEV)
	define('FORCE_SSL_ADMIN', true);

/********************************************************************************
// Bootstrap WordPress
********************************************************************************/
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/cms/' );

require_once( ABSPATH . 'wp-settings.php' );
