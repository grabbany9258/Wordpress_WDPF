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
define( 'DB_NAME', 'wp_project_exam' );

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
define( 'AUTH_KEY',         '.yX_%Ao8,R)Czv _$nI`*MHV,Yym]=FxoA]~,8MCCUnBl)eRt-uAa;i@OJlxmV)?' );
define( 'SECURE_AUTH_KEY',  '}lvI_e%yXI)+!jMF+NCSec^+<Y[&9NYUYM5aX?%(j):Q+g&kuEU`JldvV -?3,3n' );
define( 'LOGGED_IN_KEY',    'BrX ~D,;W@)h6)fR]~QxY5FqD{*CxBG/:V7~}9n~tqlW`4qM{B0jO7,#p[&>^~]]' );
define( 'NONCE_KEY',        'zG]%c_W`I14#B]#]<G^<[$zU=kl3PacCR`YqtKFG3SyU&2L%${VvTFA>[E4?hcg ' );
define( 'AUTH_SALT',        'gc!Xi_eOY)3{wA< N<`m9A:s=9qLZ,Hejy/XiN;)rWxrYsWq&5.F93-F;8Mi14BP' );
define( 'SECURE_AUTH_SALT', '%cvP<7(-Z6B)|9HSjR2o*Zb_ P~cba+L8?h>m}baN(~ZW}$z%~^~Cg&zQ<Yq]p;J' );
define( 'LOGGED_IN_SALT',   'Vq]~~{bO_HQ9f^sLei?>};z(e${+gC]v^YiqFkM#T2|>MdTjHAhY+IERDWglD4cA' );
define( 'NONCE_SALT',       '+bc S!5O$-|_h<?$.#=~v$3e,!z`4A*#%[~[aL?mjsbHu ~3(*{s`#asz!ma&G}j' );

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
