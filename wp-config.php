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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_systransint' );

/** Database username */
define( 'DB_USER', 'WP_admin' );

/** Database password */
define( 'DB_PASSWORD', '#P_g8UK6(hKSdFY' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'eM),#e=*:7wJ26X+(>)|HwBf2tw%^D:-6$F,tqK&S7 0<F.m)ugrvN<RD_E-EV0,' );
define( 'SECURE_AUTH_KEY',  'Q.+CPZ](lm[!@~x~FQhOL<-g6ribI(>/)`aY?rs6]`ao9lB:tTANpt^Vfo5k7H$[' );
define( 'LOGGED_IN_KEY',    '?&6#/l#nJ>S8fRQ>Dbu+Xmv]nA67fhw?Dh_!52}c(Xv#u)Ds7i8VEM/Yo#L!W7_Z' );
define( 'NONCE_KEY',        'ONP;@A-j4jM:.)~%_XzvKZSSCE~oEkH04(+%B1#zZQG`z.A!Vfpw_N52E9-Wb:ip' );
define( 'AUTH_SALT',        '|q!`+l{u3.wmTR=gBF6j8I.:uGAX)MRETDfW7)dJCg$#J(Z1gD|P%dW&#K4V5y}h' );
define( 'SECURE_AUTH_SALT', 'TDZ;B;K^l5t/??kp<T!LYK=a- wVkB~WhX^nfy*6a%n&+}Z-#`H3skq3b}L CMoe' );
define( 'LOGGED_IN_SALT',   'p!{ co?:GK?kI**rw-S^a?9XZ9RT6=|{#mEW&.XyK+?R[H,4{(bhvNF=-dWaU)q5' );
define( 'NONCE_SALT',       'uPkUW)mXqsuhtDj>lJ`t}#F,_&1ZNRsWKB_Xqfwd&{`%M)pL3hSi-Q/e?93UIHm ' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
