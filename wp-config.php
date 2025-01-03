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
define( 'AUTH_KEY',         '5dfxN&rKB3#pSg*f!W`1maFDG6_pFoNz#RWy@SX<5[;V%caxy*v0dv$ORVDl~chr' );
define( 'SECURE_AUTH_KEY',  'DeZIpv[L]sWdhdry;H^P]<Dj]?JEn+tXyRr P2;M*{!y(Ab5J{[F}rYN(n`egb3*' );
define( 'LOGGED_IN_KEY',    '@4$)Mn=RhFb`YkZf=6NoWJ{/,M_bRDH6G4ja-k-:(^gf 1|C_<$ALYr#}]4n3P~J' );
define( 'NONCE_KEY',        'vzPT?AWep:}AkSn*)@?ZQ8xNEw=Lwp1O<P7I(L&sa^*N[?M^28v]R6xg0]D$rg+Z' );
define( 'AUTH_SALT',        'sl(]gE-!x~3c-w&%OA;d-B3SmN_A3=RLZ%zhZ $.Xh{!ZHZUW,ka#Z.H*n5Pw;M~' );
define( 'SECURE_AUTH_SALT', '2#W:JlxGB^!C(}_6U~e:4Gqnk>J-r7XFPcqW*!{`a_o[yyA0<UsYhK}DaCN6T??0' );
define( 'LOGGED_IN_SALT',   'G*BMp_Ic?Kfv _f`bSNT0XP8k^jml:<&!&z%:]j@{ymkmSl$>iENmVB.51*9yv#;' );
define( 'NONCE_SALT',       'pme!I:!(kM $/BHy6d1Fd*n4%K{,-cCVu(@W|2.w]VP2].?E?k4vnPIiK)QWE8s8' );

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
