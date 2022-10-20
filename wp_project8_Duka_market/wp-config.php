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
define( 'DB_NAME', 'wp_project8_duka_market' );

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
define( 'AUTH_KEY',         'e-tEw}G*rW+so4?rmqS{_#pQe<yw#TVs<Td$E*DweMEBT=b=G<La03t@JGEYw)Me' );
define( 'SECURE_AUTH_KEY',  'Nz2o?`&a;oR_1| Zp$wt`f55G34a>VdV8Nfz1jKD}PC/=mE3gNRJFZP1+^V[X$AS' );
define( 'LOGGED_IN_KEY',    'DY0a0O-JRPp~1Q<w|_4h231!O%gh_yAs=mC}Jva8geZGiA,uLeJ1e0+>mCD?<49%' );
define( 'NONCE_KEY',        'g^H~ou?#>B;CF`u<.7D!7D5e;HdGk<b!+6Nvzse%P!LsmD&`sUxGHH7q-Q,f|#Jy' );
define( 'AUTH_SALT',        'OrXv`dvP8CaYV|2#h@$!`6*U(XX;/p+s,!~a1y6tG?$H(x5p=9N9Ifmv:<]ZI.~ ' );
define( 'SECURE_AUTH_SALT', 'kGONM6W,y&fb}&1]n~^HAqwfd/R!c=(Miq;9F6kiM6CWjjnS8s>TAhngI@oxi-aN' );
define( 'LOGGED_IN_SALT',   'bsOR(H`686U$hHsA]L%0%3KBLr ;gy3<oM<-h$cHl%[?ft.^9,sq?Y_W ;?r}8g8' );
define( 'NONCE_SALT',       'GCp}w2/&.2356l%EzPf%S[lXUaMp_bS>pSs=wV|@+Ehl+kZ<3b<vV_6B00u<u1Z4' );

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
