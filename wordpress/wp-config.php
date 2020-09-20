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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ']Hi96Wb>H6mpSyd/aj2.:E}7Da.tf=f.C1>K/t.@((LX8?j;bG]yr!YfU1v= ZJu' );
define( 'SECURE_AUTH_KEY',  '^nWCgi=UY+mLMb_zVBnS4:`PIbK>;d].N&Q5Ju,jC VVX}S:NfPD[Wl=ok`.(aF`' );
define( 'LOGGED_IN_KEY',    '+=yL#Oyf_h>DjVJ@Xs+BPm}ZkZC!P +$F<+]vGvs<u1CJg~d(#alW%I`XfyVp;9^' );
define( 'NONCE_KEY',        'p5aX[k`Ut %0H HaQt#g`6Zd4^L5}&`9g*l,gf)a LBt#D62hfSM24h=~K^wG>g5' );
define( 'AUTH_SALT',        'Zz9^%YmE6lL-#/acclItW?wiXG1dpiU(`{}yzGTIXm*k88G-JO:gG5krA:xg5JW^' );
define( 'SECURE_AUTH_SALT', 'R]0k%CBIxx3_UZ/Bo^M a/|#biS8[rL1;r-;?/vLi+{PA=qV{g:U}zllFZOVV(_.' );
define( 'LOGGED_IN_SALT',   '^uRlo2:bC_B34hh :R>Z{NRsHHbJr*|MR|&m[=k8ru!TV63$ >fHaS70#7~cFXN5' );
define( 'NONCE_SALT',       's,aPEvtD8}<6}z]RkP6VKvUjY]Zli!GE=%=mZ5aY/$W*>dMI>K5kIl<qcZz&~mI!' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
