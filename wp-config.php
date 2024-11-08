<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dror_selivansky_acf' );

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
define( 'AUTH_KEY',         'Gq+!D9KK[lOLxbt7PIE+m^uhJ(BQ)]gW]e$X^Y1?Z6NU-d1sis}CDZqUOA)%l1@V' );
define( 'SECURE_AUTH_KEY',  '%VpR-MVjiC~J(L=OPUnqkM&!vxa.v yIxWC<_T}FLQw@.dv)M=iZyLxl{Eg1kbS_' );
define( 'LOGGED_IN_KEY',    'EQmLo5BRahTQp[93XO?(02q-fuok.P(.m3LgnCx%}e:DtvQl4J}?Mg OF~c,5dIl' );
define( 'NONCE_KEY',        '[tPJN^@C2Kz8>2F2ygh1&3M5Gc3,M,1,9?[vh,R,B8YF$gM/pjx:q$hr`@`rB0[9' );
define( 'AUTH_SALT',        'rHpV7Hx/FYZw+(%tGui]cl_c6@o+Ji&=>Pmu#MzH3YMd5lO>KJ?:UDXi6iWPL!`g' );
define( 'SECURE_AUTH_SALT', ')c._w!)8:;^YP3YgO=~y5X<ap;&:t$XrY{ v VY`YcUdPL~2xaw}H>~?RP]&KCk3' );
define( 'LOGGED_IN_SALT',   'Ap.^sxG%@vmpB7/1v^Jvn$e2sY7Ykz+ucvV8p}eE-y_$W&PEY0@s2k,mOA@b?.Ps' );
define( 'NONCE_SALT',       'j w}qE.=Xn&I$#s6!^)e3RyU/wL}4z2val!W&8)w52Sv-!IJ;ve~rU=7dX* ,!Y&' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
