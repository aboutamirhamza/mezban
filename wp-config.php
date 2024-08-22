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
define( 'DB_NAME', 'mezban' );

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
define( 'AUTH_KEY',         '?/wBA0m:+ 5:NZ6!R37L&j$|>|<})5bv`=TFFll>MU+; >Jv}pBV9+ 6.hNd%<~k' );
define( 'SECURE_AUTH_KEY',  '&1-1T_V+ [swl&bJQ1scYlPbXZx+]=p`E.WvT<w(x|m/#BBw-E6A~2=FrG|H8@1_' );
define( 'LOGGED_IN_KEY',    '|g6Puce2}Gv6wv&Bw|w$8I%_isf!c+xquR9u@lET6AEZ vPWu0(vSw#a=^(qwkBu' );
define( 'NONCE_KEY',        'nOI<vy,jN^+L`bxxm54{7?]q~W<Mrd2#!YwhL6C=hM==NvdSK`pJl|P^sEC^KMT0' );
define( 'AUTH_SALT',        'Zh%w:&~(eoC+BwO*S8!`kxeGE?X%>{}2q4H}OSz&@:Ae?.%D1dt4zs&n>X.W}<Yy' );
define( 'SECURE_AUTH_SALT', 'bh&OB|K+VNzRR*1:,+[oqj*Y<1CNa[Ngn9 +v(gt r>k;L,l>n5Zzqd.y)EBNl]r' );
define( 'LOGGED_IN_SALT',   '[8Q!R3dH/PJeKl$6,e,pU3rz0D3ys@Q&ic6. *q}y/uC~wjfZlvyV9rLzql<P2;l' );
define( 'NONCE_SALT',       'Fks<et7Bk(:XZ&v1tw*_4VIIKi0 07J7<Onb)l>bY{NrHwa]^I@8?d&l(en>ZAW9' );

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
