<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sitioblog' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '0ed00f43f572bc2ab26791a356e1830bc7710f8d456d0950' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Sn}wPl6pKWq>k?5mvlIr5|2&f1w#!&<yHNe1OFG+m>$,9wS!4}T{f,[u/H1o?7JI' );
define( 'SECURE_AUTH_KEY',  'c)LL#`sWWh-f$+l*6S tqY[y>|g1CT?r}OdEy8G9Fu~vB c}ik <VkZ9bvD`9rfO' );
define( 'LOGGED_IN_KEY',    'aP uyE<nTd[Er*/z0+ok}I:D=WIYGCUd=5`A*em?#6gvSh((<Z}|7X&eUyy|EYfE' );
define( 'NONCE_KEY',        '0l,`-cfXmP/WF2FOMOYBi*;T=>/Xj}EQeSo,jrq_rVO6(4FbeGijd@7e/)f#X.`3' );
define( 'AUTH_SALT',        '@|N_X=:?Pj1S}?aZVaNA:v;LL:K+oY/~Yg}Li9y{|~{i. -SV[EP[0]@0HW*`{t3' );
define( 'SECURE_AUTH_SALT', 'xy9Hl%um($ivEr-8[{,Rf*yH4s*H^hUNK6F1+dI1`-ZwPo/2^tvd!WPZ0K>=L])#' );
define( 'LOGGED_IN_SALT',   'C9<8U536M<ov>r.w2*~@}{ Bmf3/*.K5egxO1|jF%bf,>i0{xbQO}pA[+(M/?^ml' );
define( 'NONCE_SALT',       'Is4;h@YjL<{L.cf>JN31Kb~[Y_#82Z-1+%5~@tVTFWQn/%C`(]3h8|Vdm^4(J@@$' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
