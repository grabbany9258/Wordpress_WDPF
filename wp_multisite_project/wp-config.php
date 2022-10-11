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
define( 'DB_NAME', 'wp_multisite_project' );

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
define( 'AUTH_KEY',         'UT{HIH,5Kd2cTgAN?[QaDSJuUVcpT%lVT2Q`py{hf1oFbcmaWw7ZGo#tS;%5|QL8' );
define( 'SECURE_AUTH_KEY',  'LGjzp/fWW;fr%agkWFU.$d!~<r@JcB`y$g1Myt,[_gHAs$5`QF.MEKCA/@Z.pTvJ' );
define( 'LOGGED_IN_KEY',    'dH[_AC8brRm.ifVB}8@if&_Q5+CH&9$Y<8/9yC_b:4);3, +3v=~XT,H%Cm6<n]4' );
define( 'NONCE_KEY',        ',qnLK><_}q.6JxMI`mpp+d<tikt0LPWvP3!G;VKgMzd3jpi(7|^3<8r%ugpIbMba' );
define( 'AUTH_SALT',        '4J=N!sm;yOLuw.?KwlJ/? DK>ZlqrhPqa,$6w>vkesf}#J[=sC/%+:;a,~4ZN:NX' );
define( 'SECURE_AUTH_SALT', '6Ze!pM3g7A%jSntq).-_&[>u+9oJ{;b7+*wBQjfd;_oJjaw1AIi},ZUCY/l~=>al' );
define( 'LOGGED_IN_SALT',   'lbPt;RqTQ|lr8_X&&wF{q0<G|vl7[M~C%Af7HmBEh3G5u}20?y4JhZHTi>X*w]c%' );
define( 'NONCE_SALT',       ']7y]dFd%6F5=-#ID/wf;$`=64L4R[/Ggkq>hmS%hd%2]B{81~||g=A6 }X2u;09z' );

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

define('WP_ALLOW_MULTISITE', true);
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/Wordpress_WDPF/wp_multisite_project/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
