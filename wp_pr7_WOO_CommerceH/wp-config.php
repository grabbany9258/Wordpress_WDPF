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
define( 'DB_NAME', 'wp_pr7_WOO_CommerceH' );

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
define( 'AUTH_KEY',         'rO`~;grcH<@*Dr|Va{U$S78k=4]-ZM2YT k(3G$`K]5QhX8HA+c8JTv#HPN5xk{H' );
define( 'SECURE_AUTH_KEY',  'c3{3y!H-h8(2HRs@keA#D,pIvH>CtEM^/CbEY{!G`y@$BY1luQILY_kvwO?v2B=C' );
define( 'LOGGED_IN_KEY',    'T{DLg<f*oO,/S%C2^ZQ>}tgADwqb<uiK)a[!BGRoG!wTN.2 jWK;$+sm4 -5$Wh.' );
define( 'NONCE_KEY',        'Y}(_yT<?k|^BkJVA])ph4YlOr|&v4dGa2R(WGM}?PGUMj vvl<q&.~q:hT)n>%P_' );
define( 'AUTH_SALT',        'D+(%aT?5nr<V+hTP8?-dsE2h-eDlbY25C^G<t?X-Mf)np(P_Cd~Q=vn=CVmjVu3g' );
define( 'SECURE_AUTH_SALT', 'f|[I]-]P[(^U]:)ErXGx,<6:sdk~,uqLQ06M<MZhk^5[A_W9Br5uJz>[kT*1:e`b' );
define( 'LOGGED_IN_SALT',   '{E/qRbaP0)/dETU}O:rb/alKns+x3;[Jh # /F/cngT.Lc,$aaU>^:np8Cbbu3&O' );
define( 'NONCE_SALT',       'cL=eVL%{%y$ido@j]X|~jBIj^T%R~+rxD}=!y, >}p]xYBUfTaz9_|UPV./8HD@u' );

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
