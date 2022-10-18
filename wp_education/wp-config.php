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
define( 'DB_NAME', 'wp_education' );

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
define( 'WP_MEMORY_LIMIT', '128M' );
define( 'WP_MAX_UPLOAD_SIZE', '200M' );

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
define( 'AUTH_KEY',         '5TU[.`JgL:amyf?jLTVav0Sv|<Gk?M[)2D6TW(/VR.T)CCB:IIZjBebL]SgIA-cA' );
define( 'SECURE_AUTH_KEY',  '+VC+;b.E5.GP 0:)kyw#Lb(${<yVE*jfe7H=;K2klV(@REp#Y7|4Lm94fLM}rX5Z' );
define( 'LOGGED_IN_KEY',    '#g3|x$?r6hXTZGRCCKGB/Y,36,yC)YMoT<3@pT{RUt_WFk)GGpjdt6s:l%e.4/>!' );
define( 'NONCE_KEY',        '@D+c|<^$qV3OVySc2U]7@g{L%E1i[msXk,3?8inIV|-40X[4Tj6d8X8]NXQ:~;w{' );
define( 'AUTH_SALT',        'W=9d>+,o?])4y)*4Uup>188-^/fV~yw8DYHAX)tW.CBx[MYv.Z![&h5i| 3EUqh0' );
define( 'SECURE_AUTH_SALT', 'P(M@YzXIm*O_x2WZr!X#c;sadP@_GP0V[j9;Q=H7Yj438]bDfdjF$q)EnYBt)ZfE' );
define( 'LOGGED_IN_SALT',   'hYhH(EsG+&+~QK0;nB=S#*b]]L=]:lS~Z7+IHpErv,$Y]$@W`*-Aa]FcOW8l3{=0' );
define( 'NONCE_SALT',       '>Ow2Nt&-5_4LR%N>+x/3,(bM6,]{3qXm,P#U`?^|c8{Y$?:z0fmT5z_VeVfC-y1c' );

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

