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
define( 'AUTH_KEY',         '?kX_iJ&{kB[uh6LNXq6sLmAZy(?Ar[`__@,#.YflubIJInjl|u0dRoKxjLCfRSyv' );
define( 'SECURE_AUTH_KEY',  'O8r<-m7|N.9EUoL<m*;O)u>Q3YU_|Jy]#r)o+G*7`^5A-;3*Y<_q=7$yg^|lzBa>' );
define( 'LOGGED_IN_KEY',    'l<B+Z{F`1z:Y1e^*D`..tdo@h2w>KzJtFWZ1Gq0MluyKxEkm&/f4O:Q$3=p$K+!!' );
define( 'NONCE_KEY',        'uM@`g(lvj&1w1(P-}b!YekK(ySK]2ag?>x+3_jlg3|R|AZH*r^KxwdH)6@lbj?{d' );
define( 'AUTH_SALT',        'K(S[KMDD,{x]K0*k/}Ix(/oo/Dib9Wt4z_QKQ::F0/Fv>Kb2uf(1^NVi1Ztywn],' );
define( 'SECURE_AUTH_SALT', '1<YdQxOg#7X)--F_ $Ag/4@oy/!T#^YrRIt7#)*,#!-^4M]D|eU~*$_K89.UDIpN' );
define( 'LOGGED_IN_SALT',   ';F06!ej!K:VkofjakONjxqQ<(^;oOjk5Lc<)Pgo]?,Uy U)? ?qYf`?:8mAP:/bC' );
define( 'NONCE_SALT',       '$6eZSfqGA%|Bg*x %8)5/P,&H/#/K]%@;YYo_Z}o<5Ed;@Ws#H~~Xa;Z#vJ).mGs' );

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
