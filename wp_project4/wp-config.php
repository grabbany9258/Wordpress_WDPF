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
define( 'DB_NAME', 'wd_project4' );

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
define( 'AUTH_KEY',         'BzjYX;$fCLc>qgD7@=`>DP{[%V*-h<6I6=/{Ql}-%uW2m|ZC}*jG[*258vAp#0al' );
define( 'SECURE_AUTH_KEY',  ';cvx8b~7EN)6J^NU6y ??V+xh=[g0rhSwfr{*I]Xx83}b{YyF<1JL3Oq7K7E;~*O' );
define( 'LOGGED_IN_KEY',    '*usa=JyoD&N;2s VZJm9EHq_!_`V:%.pFVvxi2[FMbrca}.pQMl4g#J6.xZoQ_Nq' );
define( 'NONCE_KEY',        '/I@96%[^ezE/sTRZU5M%v$Mu}Y.,D/[{]bZ,>t/| |b8i:TZ;w^HQ,D_!S6_dUG2' );
define( 'AUTH_SALT',        '}Q4Mu,= (7`l_AavgSZB-kvjA_rVb!+1/fI(ve1C=lVq$p1MkT#Mus69E^)mi;7e' );
define( 'SECURE_AUTH_SALT', 'T+x s)8I]-0blGCR.06:@f(@P=@QD=L!P3xb(XrK6fa!p70,0:,&`p_Y)ta;L;f#' );
define( 'LOGGED_IN_SALT',   'lz-+Wy99M%[i6|$5hw&Z^uc3<~9g/TF#n`~C-oV&fZq#(efT|{z^eHAg<u-I4bIq' );
define( 'NONCE_SALT',       'H;rO2cgJZM|/hBTFy?byOvU`lq4n9dC>r%1Z@IvKO<.&RYSERKWC_m6pf4I_P}D]' );

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

define('WP_ALLOW_MULTISITE',true);

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/Wordpress_WDPF/wp_project4/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
