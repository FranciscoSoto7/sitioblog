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
define( 'AUTH_KEY',         'ZKvnKD|8,AhH&}NrzK6uWBVK?(~oZ$Pm}Lf}vFlF0/ts<1Znz]Z.[{?*RN^@ZNo1' );
define( 'SECURE_AUTH_KEY',  'U_b| jZ3JCuJI&EaygB}Sf3(<CBf[+6Ti_5XdE^:_FSf`keh$NUM@b6O]@D`=2YP' );
define( 'LOGGED_IN_KEY',    '9P~@A!YX=3zhx2y3kdz(mc0!b{;Oy5Y(5^L4`b~#QElUYvcvphA:4XB` pKVWcs#' );
define( 'NONCE_KEY',        '`_!lq-1#y}J5Z?a,/_p#hx.s7Q(+lgs)bR ?%hEdEc<(MxQhLe:Y8_>T0,^J!hgn' );
define( 'AUTH_SALT',        'loJR8OY&BW$x;[]rd3``sgLe2!#4[/5yF*U$`jGA.fF;_QxcmTA[RcK~7Wqsr{q|' );
define( 'SECURE_AUTH_SALT', 'C{zMSx1<<oo=:Mx44O;H?FE1iw76oog<jkYnz((Hk2Z[/Lt4v;+si:vPHJ|)7T6L' );
define( 'LOGGED_IN_SALT',   'M OgGR.oN#5g$Jo!~7)jR.6AxPlEFf5vnb+hzTkFw`Ejad&TiTMOsauOIDs#s&^f' );
define( 'NONCE_SALT',       'ZyC96W%<jh/v~RLUfEKt]gBaD9g`u?x=+hT~ M4%;4_PC==Z!=7@O[z{q6 9+w2j' );

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
