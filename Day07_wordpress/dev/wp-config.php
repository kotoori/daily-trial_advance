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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'mgud-q1+TVWCPtrNuXI@Px*l^Ix=nfu.qk@cw`JN5!*]LQ:KbgXu>Y:J{5A:;tK ' );
define( 'SECURE_AUTH_KEY',  'uP`b$OZ`Ge@t,)9$vr2}?z.w7Ko5Z#^WM !)jdivetXSwh/x[)e9!_vReT@bw_}p' );
define( 'LOGGED_IN_KEY',    'xVd:v4O-`L?s-BjgqUs,%eE-VnUe)o;-hgh!Dm=T]6A&ON8k6s<W_TX%w1|=u3H<' );
define( 'NONCE_KEY',        '2ie)*@kUCB1xc)X17lIw.$#:%R2!9>yQ/_e#5%.c.SJS~txPBcyzdslaw[C<0RKC' );
define( 'AUTH_SALT',        'MfV~ALt!zC3_3A_YQ6IZ#f/,Zu7eKxtR2)ay_ZEbMg5(RyJ3Guo(0Y~kc`z<QqV3' );
define( 'SECURE_AUTH_SALT', '(jS<M:frW>FyW~;5~/:IhU#[.LQ2)}6rKTts^2nVnXeZO`#]~9-@D.%(W4<p:s.r' );
define( 'LOGGED_IN_SALT',   '!:O)U60vS@w|k=)!~>fvBeeT3[@?*@{ylEm4)XM+JDM}c1gO#AeGB>p.q9UzVWF4' );
define( 'NONCE_SALT',       'ol0PJCPjrNdYe)o[/x9F`nRj-N yWVpi3fk+[9|Z0&<U(~/Xkek;**|yD~b[R{+(' );

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
