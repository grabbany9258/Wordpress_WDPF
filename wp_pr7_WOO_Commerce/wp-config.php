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
define( 'DB_NAME', 'wp_pr7_WOO_Commerce' );

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
define( 'AUTH_KEY',         'C[2Ssh)6O6?r=43)DDv-cISS^vCxuaA>:8i<VE3mXdcsYE:G%Z*<P1iIhF=6w+,L' );
define( 'SECURE_AUTH_KEY',  'R?g!71C }El(x4Hne#>wL<vv bUXVULGU`0qGR ^2honcbcs2@1]%8X1?M%<#uUV' );
define( 'LOGGED_IN_KEY',    'w{1U:G~SxVeZM[Xs=f:MYU};!&`=f*9SHye6uq/6?Y8usieXiYJ,p|eZuzbc/]=.' );
define( 'NONCE_KEY',        '5O|fl6dRl!)Q!QUXz>H|W/9diAeQ))u6AO8<?:lF1~c3l!8sz;<D[yLwrBN!-,e@' );
define( 'AUTH_SALT',        ':nJC]wj|~!JvW(+Z*cVtONG>Jl;$=S}YfLG^0hGXIF4P!vE?vOexzS6!4i0}dK>>' );
define( 'SECURE_AUTH_SALT', 'chSan$^RNgaRCb @6atOM#UA~ 2fl9pw6&eD]R)U@[2 iWn<]y>2kZgQv(hT0mn7' );
define( 'LOGGED_IN_SALT',   'w3O`m,|O-MyfV(^!1=zbddPr}Ks>)9_1UBt^cxN<`rj2q(|w!C!9M(EZz+pNtkHO' );
define( 'NONCE_SALT',       'eFI8F@*VrIAP|j0*8cH.uYwn+`-oK<w rw/NTYth3h[t=ft7EB`w?%84T>p3&_0m' );

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
