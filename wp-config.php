<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ahub_aviation' );

/** Database username */
define( 'DB_USER', 'ahub_aviation' );

/** Database password */
define( 'DB_PASSWORD', 'P3K+GYb,%5L2' );

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
define( 'AUTH_KEY',         'Sliu&9YG ,UC}NtqI~1v/O y1UuI<_.0,.L=sA^9F/L.mPez%@{3d_;~ZBET&eqK' );
define( 'SECURE_AUTH_KEY',  '*&L8RD][ !rx/MED;g:>BfU!Ox175t9P4uBtjo2?S,kC$W8A<b<FRl9LLfbjrYjU' );
define( 'LOGGED_IN_KEY',    'oak^=!j`SC?I~>8!Ps)fke|?Hw/^3:9/rT6jL[h>UKTpM{Vx%oBTu~F]@#cCoN~R' );
define( 'NONCE_KEY',        '~TK+>(rOj,3lVOg.:k[Cy./j6Z^Nn6;0YzVwTYUF6&2;0*&[5Ah*-hfA5$`Oa7oe' );
define( 'AUTH_SALT',        '^/Zgq%1d5+W3o6%b%Q;ujt*GD&J:%|od.N-VGCWreIG=sr&^sDW/h{ogRIUz9LI1' );
define( 'SECURE_AUTH_SALT', '+S9{p6]Cds1u-Zc#mx;CXqLqF $(WfB@sa#;[s6`tS+bZ@qQv_Y[<EVB9CzN.rVf' );
define( 'LOGGED_IN_SALT',   'i#2k@ut,=vk`I|qavE,)t_3eLOps=;FDbc<,Rr|llq.S050GaS>n?fg$7{Dl6%_P' );
define( 'NONCE_SALT',       '!Q?^0#qdo:mDK|RIuXz^vsa@^N^JoRCqrdFDD!:.]ol lC=Rr<$Ok+Hd=#=rC tm' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
