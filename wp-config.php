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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wprueba' );

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
define( 'AUTH_KEY',         'u.:6s]?l+N5ci,NTji~K,kX;!xlL0cBKKY|M!*QU9?NWkh`Ik:ATNz)7C`s|KwIF' );
define( 'SECURE_AUTH_KEY',  '}C=:qme:[-0VRCeppTs6 EwC8MsXP5!4lbuU#g/p-[2Wko96<?XJ97l~p>52l2MC' );
define( 'LOGGED_IN_KEY',    '12*t9C<k_V.*c_Q&}l*`4^ |P3dZ/?^|15<xsg-@}eeExFgp]mRmT*VwEgl>llMK' );
define( 'NONCE_KEY',        '2[< UjTIJT_Xgcp-VjLd96Dj=]vFA9#mj_ihbJ[E uJlxpvnsUZqULv]yBR{l@OM' );
define( 'AUTH_SALT',        ']vvH!IEyy$6Rebuy-XrNl(xFGh?;3>cI_egArS~mdXf$SG,M+V2Q)}$3S-u9/85,' );
define( 'SECURE_AUTH_SALT', '67?}m>4ppzN[zi{yL7$)_A?O!O> 2;<Y?)F<vmI5G)_q,Y7= V[RwYejTjy[:>kJ' );
define( 'LOGGED_IN_SALT',   ':w?%a05!=!:U<T>hnh4T@S7l<w4bMgY>Sj0T|y2rK2fIujFsv[bRgT5uu&Vl-m&e' );
define( 'NONCE_SALT',       '$I-*<.}O9V]qbTdqV5sd]z+bf;FoVaPZv/SD}68ubCa+F8_q:&;CPaHr9:sO|nxU' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
