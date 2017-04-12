<?php

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'takeroot');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$<N;+UVPidLGQnKf7r#3f3#0}w;BIQ}%t~D2nH!JGySRuurR8`6rNRO[ac.B=[t|');
define('SECURE_AUTH_KEY',  '.i @Rs)K0cR8%/+7aO&}|3~r aGD`r+B?<S#q7)pxXIb$%-qo!8>OC4PrY2*T^K2');
define('LOGGED_IN_KEY',    'Nrr]W&My rZa&LfX(sCu7yvSR%;37}|cmMveh~oKWxj_}vumWAh{7=w=9GqS8S9Y');
define('NONCE_KEY',        'h<#UR/ Vv<Rsphpt)s&2uW06&i}}r`e&HT/0??B!ohe]fkhyq)}o{[*/VS$q+kl=');
define('AUTH_SALT',        'R/p3@4Y6YiZM xK2v<2zJD9HRpfrmP1]k&Ye|Gn+6 !b$$lTPeHPoV106j00x$ai');
define('SECURE_AUTH_SALT', 'xl$`s-s/g$%~. ev;Ya~~ZUz`{@=?cf>~GCGIHAR-Gc8rF|{zH9v6lGEs)W?-hMr');
define('LOGGED_IN_SALT',   't:5|m fjl_]+ cTQgUQxD?;4`5+T>e1p?LJpOYy[0,mo9s7.H|_02GP/mYqayCck');
define('NONCE_SALT',       '$;]/*K:9h,HU`e|rCwIcv^rj53*8[ri1IqH=9Aw3hx.:g4LV2-3nd.F2[%<38?a_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '145a_';


 /* WordPress debug mode for developers. */
 define( 'WP_DEBUG',         true );
 if(WP_DEBUG) {
   define( 'WP_DEBUG_LOG',     true );
   define( 'WP_DEBUG_DISPLAY', true );
   define( 'SCRIPT_DEBUG',     true );
   define( 'SAVEQUERIES',      true );
 }


 /* PHP Memory */
 define( 'WP_MEMORY_LIMIT', '64' );
 define( 'WP_MAX_MEMORY_LIMIT', '512' );



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
