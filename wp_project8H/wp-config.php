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
define( 'DB_NAME', 'wp_project8H' );

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
define( 'AUTH_KEY',         'C}MZF9D6r~atB]AOqAT:N|U^2)0!]wou+pE-iNZKDqRS-V!.g[5N9kK%t]3tx0`n' );
define( 'SECURE_AUTH_KEY',  'ol7Ac)J-9,TwRexh,KgLlT+wE67tg4B!BHVJmcQ,<[JP9T*0SWW(DZ[dg~o(4Xij' );
define( 'LOGGED_IN_KEY',    '5@f**61+KRke*F_@`AbI}tU9M..t(jsn&w23bU8eE5Hw7h>oQ`mg~{younhoIY(R' );
define( 'NONCE_KEY',        'pAruTp-[#kcY8v:I{*[,BO9?1_nE*;^H{cyK%6z?)?k}`kvom^nONJr|&`EBl7aD' );
define( 'AUTH_SALT',        '/L>tYNDB$CM<M$B7cuC! ~P:NRC9o3/!(kXMx/h?yPQ@6HlRLOD JZwC-{IM>WaL' );
define( 'SECURE_AUTH_SALT', 'Bp@(w:ZGB&YwNw#Pxi!lP:?uUUKhW@gyXW|~`{T26?6*vBt}CL4z/*oIS~yieX#S' );
define( 'LOGGED_IN_SALT',   '5aKtt&YF5ujub%NFF&jug1tB^{!$1Tgsm!JtKlkfeyNe!|r%iDFKi;=&KIlHbQ3W' );
define( 'NONCE_SALT',       'ZR[# aH5Hd,|hgx,~oEOyXthkz?B7CL5H%<v~/IV+ 6&^;iN$;H4@${[KzM.h1+&' );

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
