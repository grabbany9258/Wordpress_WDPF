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
define( 'DB_NAME', "toki_theme" );

/** Database username */
define( 'DB_USER', "root" );

/** Database password */
define( 'DB_PASSWORD', "" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         'Fi$$a4sEg%Av??h7@f7p3RdKU~.Q+p}hzld>^DYDiHh!?Ckq7na,`R)Nl!Rvnn4f' );
define( 'SECURE_AUTH_KEY',  'R)t`B+^@i~Mf>?s6t= {6Tz%]]<i=16J*/8c}(wxvg:^$~bWw0MJZzyPKjDL#7Iq' );
define( 'LOGGED_IN_KEY',    '].%dDEWlVl :QIPv3Olym!45#j.6sdkP,9< *fVmG^,;XzNo&Fz6nv=V>o#j:8!e' );
define( 'NONCE_KEY',        '#?aXS5Ai*.o<[/f,S(4IdS 1{tY!KstP+KSuyW]76,cd/Yj3mqU^chQa0FE9I`V*' );
define( 'AUTH_SALT',        '!L8?E m&xf2Qne1{-?GgQ3<rHKhMCs[BLpE?=#E%gUd>{nI~| a2f?$?A=hR%*}t' );
define( 'SECURE_AUTH_SALT', 'B,#lMqRYWf=&R0>V&#Y+#NhN_GCrq%7r8Md!1).Y ZzE0jMe`j3Mn*XOf2)66A,s' );
define( 'LOGGED_IN_SALT',   '{L/u#v^*6b;01u91y#@;,{/{BrXPPxFnncYv%pL#PN[MwQmW|tsuz!eDLh;}7J17' );
define( 'NONCE_SALT',       '@zH6S2`k1+E S@`I%kIdJ4A[-$[`5^1Cr_%z*U.,?<~n4m?VECK(n4e&G4h&XHgL' );

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



define( 'WP_SITEURL', 'http://localhost/Wordpress_WDPF/tokitheme/' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

define('WP_CONTENT_DIR',
$_SERVER['DOCUMENT_ROOT'].'/Wordpress_WDPF/wp-content');

define('WP_CONTENT_URL',
'http://localhost/Wordpress_WDPF/wp-content');

define('WP_PLUGIN_DIR',
$_SERVER['DOCUMENT_ROOT']. '/Wordpress_WDPF/wp-content/plugins');

define( 'WP_PLUGIN_URL',
'http://localhost/Wordpress_WDPF/wp-content/plugins');


/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';



