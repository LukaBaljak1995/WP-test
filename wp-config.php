<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'softwarehaus' );

/** MySQL database username */
define( 'DB_USER', 'luka' );

/** MySQL database password */
define( 'DB_PASSWORD', 'luka' );

/** MySQL hostname */
define( 'DB_HOST', '192.168.64.2' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'fi;O&S)8$kpt.2c.gWN5]mb[q>OVyZ#GMbL}B?n5XfMUD27l)Cybw *1Ev>0|cyS' );
define( 'SECURE_AUTH_KEY',  '2j/0B_)QzC^#S*)(,*~*:cR]?e y0i.$wJ0;Ogq5xNidv}et^$@L9nW+RdML+Xa#' );
define( 'LOGGED_IN_KEY',    'zNQ<;r;I8Z!ixuLtQ<`0SVE>:#qnX$ZeO{zw|U&>& Wbqxe|kkh&+:p.zC2*|-G@' );
define( 'NONCE_KEY',        'LZ~c2~~2N(bUPy/x@S@>QhhI+#]EA=&{q/Sk_[50J|iyIVI XHe6I;=- BL_V*>3' );
define( 'AUTH_SALT',        'ZZg^5yGf%oh#KPIiGv:7m1k)dq|ZWL}~`yGAo`=M-g:gS{ZP*[QliOTPwZ-k(k<y' );
define( 'SECURE_AUTH_SALT', 'MWid}C2<l4CpZR{BqgipVe.^/JynTzg1$ikQet.3`;W~dZK0qnm1(]1e/)|3|9vX' );
define( 'LOGGED_IN_SALT',   ']>o<<[ (5iLMD/_$cUw0K{9<=AJ}(c#z`K.gsKZjh$yKD+yJ}?jeOKt^}+.dmUjV' );
define( 'NONCE_SALT',       'kT^NlBqj$k]=Hk7-B_2,*3S2ztE9MX/K**kY%{L$(K$vrT35WRWX[^uMdMIj@R.i' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
