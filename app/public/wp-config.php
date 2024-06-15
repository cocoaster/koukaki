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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '*Fw&b7X5dKMFYW!|?/@NNk%Wq44d%H@%/<(9QY)EZkvTP@I<3T6}>mj{8>s5|{%W' );
define( 'SECURE_AUTH_KEY',   'X3)sJ}Q2Jj9(w^I|`dh/u<@uMd#nVRli,8x_I!`NRyY80yQk>d;&e0b+Q@o?Icuq' );
define( 'LOGGED_IN_KEY',     'N}1`!X9#K_^2MdwRE!usE*pZ-tZq.DZ8Ka@L=GYKdNBhZG+HO@3m])^:D7k(Uj J' );
define( 'NONCE_KEY',         ',$a+bOBg$~,$q84!VDk-n{dazS=;B95WJc7yFzQF!j.QZ $>t5@WtK 1EzOGECK`' );
define( 'AUTH_SALT',         ';m]jG{dGC)Wo&eBd~F(?h%2u<qphtgpKOOy/W.8L]pFmGM&mD6]bqnERhuSXNje1' );
define( 'SECURE_AUTH_SALT',  'IR1LZ@*B2MWbBv]tRW,Z&oCaeF/C6B?=ZQ>/D3J2{?61_R1-~$ >sQN 6Hi_ZGI&' );
define( 'LOGGED_IN_SALT',    'W.yA>D[w*}l>(BHz!xi<ere<Z7V`9zhkYH1t|!2fve>>vx=#E[H/H d[:<,HZpj`' );
define( 'NONCE_SALT',        '+GCf`B.!n<6>*&mHb5vRuu@aiTJ^Q;3<moJ?bRE7E%HsQgmnFBBkz9w]AgPBi0/S' );
define( 'WP_CACHE_KEY_SALT', '@^Ys47ThP vY--AOU(=x|9|5):zT`P&RoJK4RG),ls#,v,Ek2y=|lLzkFgrD`Dd7' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
