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
define( 'DB_NAME', 'job_career' );

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
define( 'AUTH_KEY',         '1A$y7ZTOkREk~X}f_3RZ+A!?`gt1DvS,M~2bTj.^Cz3hE!ZKqUl8`W`^K;R{j~3{' );
define( 'SECURE_AUTH_KEY',  'g1MMjvK51~[%m$L@%-2L$;|L-,`jY@-1wTWC@q{]zK|+u28;IrkXTvgap<2)FyaA' );
define( 'LOGGED_IN_KEY',    '-($i5A}SIFs:w)94jNT?4*sFLmwF.:[Ui+4z< L. cVgx;m]eH~XxO6l1`BgcO>l' );
define( 'NONCE_KEY',        'NXD3uBb9/nlJy{*0b;9zxLk((6Db;%w3g0c+dN9ew6brcS|]ueP.zg5?T!/BsXBf' );
define( 'AUTH_SALT',        '}0gAiPzxmG^_96YIjkd@+.of:Ge/D{:=C%B-Buyb<ynN5F*VdW~z?M%#5iUj7U6I' );
define( 'SECURE_AUTH_SALT', 'lcb/]!^cnWYqi83OUGEjen_q~iC`(cYpBCtH3p{tMHA6Yz#,c;w0sT4TzrCz:D{c' );
define( 'LOGGED_IN_SALT',   'T? CjmMU0] .Qsqv/UY1FDv_8L(/2@rt,88j??3Tbj$Etom=A!hKv){A9O=X)KpJ' );
define( 'NONCE_SALT',       'Q&*YfnR-8nCnB;!_g+?IMc6HW/kd-F4)voa[l5`N|J=z~<+X1^%F:U2AiwIhRp*Y' );

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
