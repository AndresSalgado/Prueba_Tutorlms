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
define( 'DB_NAME', 'pruebawordpressdb' );

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
define( 'AUTH_KEY',         'gX76vd}6xNvjumkb}H:$+cE5=vLoEW__:mbjmTkq}f(Qd^>,Hw):2[mDw9jTl`IE' );
define( 'SECURE_AUTH_KEY',  '7Q$2=k*Z&M32tqA&l!])d5G2hQ-NvKI?LC:^fmJg,ZOBsL% U@TS>55M|&tT1jAA' );
define( 'LOGGED_IN_KEY',    '7uQ%[@SX.U/:9NV21)o&G!>=yUjk5}8c>iInQhv{K8W*!.dmcav<X |a.t)u~v0]' );
define( 'NONCE_KEY',        'W[zrl}IkS%tR7%SLmIuK|fS`Rimb pih5t8.y-&4q:&SpKN-kkb.S0g1s*bA|61G' );
define( 'AUTH_SALT',        'RTbN?=M=;rQ4_Xm1Xrpxz7BnnmqY)twk0BfKN0?@{hSDq]#mOu6inZB=YxoEoCl3' );
define( 'SECURE_AUTH_SALT', '1J)t34d lK#Bk({&zuDZz[7=kF-GVY/cJB]wM,s#ib~0$7TM]xCDNw.pAwBc093l' );
define( 'LOGGED_IN_SALT',   '(Py*|^kO74 6$Hn8zTZzBKWj<L;[I)Y`mVh[Lav.*{h?:3KH+Z)5^qz_%LL >[w2' );
define( 'NONCE_SALT',       '~Get5TT&_N&duCMGli.IeDj/;bn6e0^*1uwkQ)7KW%9r!g!*yC%.s}0iR0{7F~f[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pwp_';

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
