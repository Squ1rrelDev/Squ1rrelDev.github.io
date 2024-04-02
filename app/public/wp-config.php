<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'lP129L,)7nSrkmct,BQwM9I TD<}5vKo%n;@G!HG~:mp-H,zmkEYx}F:spzQl[A.' );
define( 'SECURE_AUTH_KEY',   'Snm-&/sZm9e JXG50t!Ki=eU^Q4K@-+C#5Rkj0ll7+<vi+|2CA57v):[bpp6hn/q' );
define( 'LOGGED_IN_KEY',     ':/QP~8[ga,M^$jVNU^)Whoq@UnO%oSa@jRkaq=(KT/6I,B7Pd`0=(oEV}DU+}_RU' );
define( 'NONCE_KEY',         'xW)n5WNM%X%kI$#6@A,8bHo:[TvH1}Me[d@_1i6AR~?akvY:?yGF*xOQ5wYT]qF(' );
define( 'AUTH_SALT',         'cO0V=%YbX@*E(eV*z={&oqL?TXx+^v8L+qG_bzI/)@*mG()UI*,S[a5,0hh/H&vX' );
define( 'SECURE_AUTH_SALT',  'Qtt0M_1z:C^G4?3=N6DC{kt.F ^ bZc7-l_2<oO~KCv0QNL;PVv}.cMa`rBp9KSn' );
define( 'LOGGED_IN_SALT',    'b_x9!XQe,C:xSsy] ;qV]5UJsj5$> }>J! w24)D/?]z5:a8CWq|AmxfiAc0{^4w' );
define( 'NONCE_SALT',        ':8(R9m.p6Z71=.q0hUsWobEk,~2QgF1{fx@,bm,i]?}aUpo&J!U3=firE+~h)bux' );
define( 'WP_CACHE_KEY_SALT', '/@slY_r6~F0)Ssl*@wQCvsj|5_Gae]pnRfv~Z1}=)YH8$=]0Hy1n[@wuu-~ybpqV' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
