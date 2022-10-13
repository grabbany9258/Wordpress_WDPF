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
define( 'DB_NAME', 'wp_project6' );

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
define( 'AUTH_KEY',         'E[;8;$T%EXDB+o1`dqbXU+%h.)9|,`cX<HE%M6:_.?]?_c@<%HWj%u[sI@d%ILJh' );
define( 'SECURE_AUTH_KEY',  ']ydp<H#(D!-]-90H2?&gg==O_A!x,wCXpAz~XQCdVj062@fbGHcE8(yy>?Q.@6gA' );
define( 'LOGGED_IN_KEY',    'vsY!)H`vh6<1PGv9.`2:P[pR^bJ1^^kjR0r)cFO#mjw!Hg`va`2+*YT(-mZsBEN.' );
define( 'NONCE_KEY',        '/Fh6RLRV19Ln@mG>-Ny-I(y?I!N6H!/V~[E2,I.[<+cTW;;`&88g@7]]r)Vz3lIN' );
define( 'AUTH_SALT',        '2_]E%mBge1b`|ISEzTM:XLKkm?Q:NObg1`^j>~7U-+m(&7sBlC5 {)3`G^JZ=m>5' );
define( 'SECURE_AUTH_SALT', '5*k@0#I1deVy`ri!pijQF}}|5lXCdsm~^CYi|V>|+94_EgsD]G[~MWSKP|rDZ9O9' );
define( 'LOGGED_IN_SALT',   '^aVDr3d9Sm8:N[cvNrEa_?Ywls=*lqKz&<5Hrg4YB*#cy|eOj.7f7sBy,]l_9_+>' );
define( 'NONCE_SALT',       'qTw}>o`@DaFNzvMO!R_~nKGL4N}&R$k%mL`h*{3o-Z3j_EKcACML$bN5u1~TNtLA' );

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
