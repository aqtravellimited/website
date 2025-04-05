<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'transportation' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'H)n{kE-E24w``W3CrcGPx{u??#3q[@V)~w9AxT;`o/Z|_.E@gJYeD:Bz.E[eD2[Y' );
define( 'SECURE_AUTH_KEY',  'kwZyYX3P/I*_ZB$#|MSdR&1H2)^G:4u-apGawZ&K%DsAMoVQNct4fALh`t=BgM`I' );
define( 'LOGGED_IN_KEY',    '1tRl,YDzG(Zua6u$RIY_GCg8~Z9)Ue^=5}n7oOAJ6zpNuXQfohT;MsMYmW!J-XK%' );
define( 'NONCE_KEY',        '$hN fdF45sCE-0PmU<6PQ.A-Hou!-<Y7a#@/=/s7qJmH|L,ljj:(XGm)p-{HIzfd' );
define( 'AUTH_SALT',        'F+63+}yQy/*SGTLSj~M%t?$1a:})|as.cl:Q-X|Z +uTW(%2qj.{: 69-pXqQ}+O' );
define( 'SECURE_AUTH_SALT', 'qCGy]W_#DQSmoW>19mGJ#Mt6cgBXG[O4E5LCUTap]+JPI5v$:e.r+1&0}c]rTm|=' );
define( 'LOGGED_IN_SALT',   '-xxVDcI)i:*k<i_|yh(Kucyo2:wlLs4M; C3A7XLKlV7u a%0pD>NHI~>7*J-DJl' );
define( 'NONCE_SALT',       '^Hj~5)Xk#9Ya39p|OG!E<ttsuC=F3xw@$;MZg8Vv}}wM=ZNPlpp,S,AMn;TK=+`a' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
