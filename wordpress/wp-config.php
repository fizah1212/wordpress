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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'X%!]SycvBK(+$|.b<qESXv>g:M @Yl_-3V1eXuU,q,HBV)Cd1;11!Nk&H&@EgK6+' );
define( 'SECURE_AUTH_KEY',  '&01HgO6+m|NLr<}mu]=zRAFu84Je3kjg[Dzl7w3.rHUF]%]H3gw?wW +eo*gNjBW' );
define( 'LOGGED_IN_KEY',    '+fy63&qP3,6jZ,F6SQ9[y3)[/zs6^#FRpi^Jh<c{|Lz})Z8,hS]Ol^Bq*v9/7;:U' );
define( 'NONCE_KEY',        'b`Z^KWW,6&=<Za|qaZoI(%0hCp5G0{4 =LU}g7F#[0JrqLU+P4Imn:Ym58ghN;<S' );
define( 'AUTH_SALT',        'erd*ZIHIXL1[cUyG5c1L17=f>tl//+ v|2bE~sYiDlrc1kPC)K90U4ZL!vy7@4!(' );
define( 'SECURE_AUTH_SALT', 't?~gY0epOCoeSc ]>i{Ig?>eSx^i6EV*/CqB(yoXXidGqJL3-lY.-ATfB[6m6]Ka' );
define( 'LOGGED_IN_SALT',   'H`GkTV&`OVc}{7PByp`L^moy+5xD+7S~j2m(Kvb/A[cy!+G(ReZ6HF]XlserT>l+' );
define( 'NONCE_SALT',       'BXI}iV}$aw3^~pnOedlRFf*U9I()H~[27Mid)xYTtt`:WYPvy/OoC/?^YAcAiL89' );

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
