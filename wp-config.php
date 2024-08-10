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
define( 'DB_NAME', 'PhotographyWebsite' );

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
define( 'AUTH_KEY',         '2S0d6]ZK!xpoh2N>hQXaKMA<oe)yv^Yo}L9TIFX;sOF}ZQG2Z}gphF|Wh!lNM:}{' );
define( 'SECURE_AUTH_KEY',  'WVVEkzjBd&<f.w-PkY*JT#dRL8$2#J]]>Op^$g -yR&Lw!LZ,.Yo,HJIXWc+BBO0' );
define( 'LOGGED_IN_KEY',    'x-avQ3DQp)siDmCJ?;]Hu&/YAC6@i.eQ) *_O.m_||a]eG:f$7MS*ov;a-b9:ZVo' );
define( 'NONCE_KEY',        '+pSx}JVl)tt,;:DZ-chw`9KI9{X 74@;gSx2PZc44(KHjg&@h;u]2u?xKKI$.-M6' );
define( 'AUTH_SALT',        '?ngq}bU@8hc3]U1Z1Ap|HAXrTONy(!@0bPr9C7?-vClyTcoG!Bs[^GFlsVX>igs ' );
define( 'SECURE_AUTH_SALT', 'I$h1h67Q_b|#YxH!RhcJXNo(|/Mf]/CC$3x~*kbuhN V@?3HnA uw.EloN2~2BDv' );
define( 'LOGGED_IN_SALT',   '5qj6}M/&CWS|Y36@k1PA9V[$I%^y^^>}DCSj^O[h-PS;^~#3R|N)a1C>upX!)qnq' );
define( 'NONCE_SALT',       '.SsRsn/%n_5=Ygk;1N7ym^Zu<e3gse3Lj!W}LMR%80-6ZE3rU?Ufr:@{l ~axM8Z' );

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
