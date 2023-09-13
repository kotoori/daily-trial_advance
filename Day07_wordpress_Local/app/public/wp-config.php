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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'M0AMRA9uIw6NjNqmAVvFAcHg4bBNyDvjy+He1MbJLtjsIl1NjTolR7yHfMgVf71GLVMP4yjhLRAcMuGe5QTWaA==');
define('SECURE_AUTH_KEY',  'NNwQ/px5+Xy7Y1+So8JHzAtER36UymmoQnQot+20ZdvpOIsyw+dyn5aiqRZuVcsFrHNcc9Ab0h4YonzinmlIqg==');
define('LOGGED_IN_KEY',    'Ur6lnamUfJ4ZfGJhHBk0rv7GdkMtXqkxd0qXlQ5NzixPTTlIJzQX0c7+YJ1d+5p1oMOpa+yvfpclDzIsSZHqrQ==');
define('NONCE_KEY',        '6S0gMWd7QykZXIR3DS4QP38UU6J4YEYK/Gpwy45pxKkmXYc630O0+PCRQ8WZBbdoxeiVYWxA+9xZVXxsGlCkuw==');
define('AUTH_SALT',        'tVpEhGZPThaiKxKdJOJLglZTZOB/aigcIGyqHfqZRlHeZNH3BasYNAH7U+y+/V1LZ+jKKLL7J+TDLQvlbiq0GQ==');
define('SECURE_AUTH_SALT', 'eNrZkRKarCsTCj71PNypZxlemFAvk7ywEfEjcrNsygQiNV92Qq8z4KNPLDYpb4svi6iUPkLw0CLn9KtGrUMgPA==');
define('LOGGED_IN_SALT',   'GtE8D3o0ToInpz+r861z4hjFEz8a0VHAu+Z84P8cYtWx3mCuQ7L/Aq4/FgeGrX6BkkxEzl1gGZj4EaxhjIxZ3g==');
define('NONCE_SALT',       'nj7wvTsQ1rzjj6xFb0MFV+zGjszBHuAJPPNqh0OOCnqw7NF3pKiisW/PTy4GmhQcEMogDPElJhLvGkJfPgbSdg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
