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
define( 'DB_NAME', 'solar-wave' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '192.168.10.118' );

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
define( 'AUTH_KEY',         'nbN1kc?sby62qA6r,($%NQQg+jB0R+3r[BB5^(w!Y*1Pwq]n3XL,|A/wMkC7LiFs' );
define( 'SECURE_AUTH_KEY',  'M>vyL#|hgu${Le<2k4A4]ejtkokhME9kva{p)UO6;sJ>XMYwIGwp3IRGyjwp;nlw' );
define( 'LOGGED_IN_KEY',    's{qv2}A&ng%j~TG5u%6KG17u}C0kz)&Nmr^gf$rkf+gw{Fn_K.v+jBOH5GX*80HK' );
define( 'NONCE_KEY',        'pgz*sBL}JZD-$o0)k%{teQs3lyDI]^.@,ldlIH63@):BQbI6Mh|s&l%AQ~-UM=W(' );
define( 'AUTH_SALT',        'm{^v%l(/g=v1s{~G4zn?uPeH$5[hQ!|CI^?I&1^qPp$R?~*9%9bM-HJ$6CFp{5|4' );
define( 'SECURE_AUTH_SALT', 'N(B2_5cA=`>y]&efq30OjU)]N<druoIxz@wyJeXggA]y4hbH)D=LDibz.%:v}OHv' );
define( 'LOGGED_IN_SALT',   'k@-Lau{WROQyCp sF/[lySOS&4bs2)7$~et)#/qHh$*du5P!KWMaG56)_uFU522+' );
define( 'NONCE_SALT',       '}s9AcvKXV3E-WoZ/E_NVHZ:&Ig(qdO-3=*kw9+<^q#3+z6A2djbaZ{w+Jv6r(%!|' );

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
