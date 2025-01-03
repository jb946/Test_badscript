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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'b9R7YpX7ZbkPmQK' );

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
define( 'AUTH_KEY',         '`VUj5q1V>}r97-Q<v2BiqIv6Epr985&z,|(3bV;uyn5Jg8lVP!yt/z.a$#EC9~i)' );
define( 'SECURE_AUTH_KEY',  'f$#s{ /HSfD4eo_`_{%NZH85@[;-~_)k-+t<qFN+n8$Pn_z;01n4`MjCcD(&QDVu' );
define( 'LOGGED_IN_KEY',    '8k$|Jl2jGj2MA.Zwh99OrJ*XJ(xH|t%PQIm-W]5P+dO8jVdaEPM6fzR 8m:d7@yM' );
define( 'NONCE_KEY',        ')F8L[8SDnL{r|eAfX<?Ql/58FM~;wtGCRSuu@E8j|VvK]AQ3NZdk8si&~_Ub0P_u' );
define( 'AUTH_SALT',        'h]Leu:| -)y(HIY#7ic&kS{8WC%P3@$BI&tQi`+O&Bj/0 |/x7FF;o3E-m @`i,]' );
define( 'SECURE_AUTH_SALT', 'rM_eGd1JZYT>t}$65n[G_V|^|CzKW!p~q6Yj;DH8EZIK`VGYaeA3C}MmZ(~:N+&{' );
define( 'LOGGED_IN_SALT',   'ul*X}rPkAJQq$4X~$,%-L=7wfL&zeXHZzX?CSK!S*GcE^Ri`AnV_d|Rrx_O=tFuw' );
define( 'NONCE_SALT',       'zE.$uMr5:bc{=(bYucF5Stb[bg9y|}i.LI:=}F9,:#1IC<1}l]Slsn|8YA4l.KC^' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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

