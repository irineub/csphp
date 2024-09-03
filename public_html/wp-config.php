<?php
define( 'WP_CACHE', true );


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
define( 'DB_NAME', 'u737197639_zx1ds' );

/** Database username */
define( 'DB_USER', 'u737197639_MZW2P' );

/** Database password */
define( 'DB_PASSWORD', 'TpVg48hXjx' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '[H1HY!#]8`MUaeB/<,;a9/uJ=H%[4JuX%?8XBPIp?dG9,)7$1:cp[aKpe_-b/*G9' );
define( 'SECURE_AUTH_KEY',   '&-@@k7^:@9(u2D{m;F2F>,@_TY>z#VhjXa%q^=~0ti=YJeQwA{/rZ;n!V-Y5hp_r' );
define( 'LOGGED_IN_KEY',     'KJDOn|y1)k%iSn!FHpLcVd+N4QrIllxFUc=IT9x|{(>Y`PiE3M^ [CC{+!@r+y(Q' );
define( 'NONCE_KEY',         '7sKy);w9r+V2Y:626nXU97CG/yFbA_Tu1<gx|(bfKSY~n7>]DUsbQnwJg|?Z,czb' );
define( 'AUTH_SALT',         'eT_:Y]zvGtHZj|W-a|:zrkB^64s7$nnD&q(d/j7/{]^m1vn><^R*658!*.r}0S{&' );
define( 'SECURE_AUTH_SALT',  'N|)mhSV Uk4|pzR@98?XKwaD!0].j6.e!G;-Giz1gb|JfUZ-ExxFB~ 6B5+!# J-' );
define( 'LOGGED_IN_SALT',    '{J(Y~a08 S+r3Q,lYm*~0uKa=A^%3KE{if9n*kRfLv2Za[6ElEByEUXv2MvsfB`~' );
define( 'NONCE_SALT',        'ZG#JWwz6Wy4Sk^iH&pGPM8j!Z}P=obo Eh<|Jv%L&WOun[-dg}.PAK}N*hZSPlVR' );
define( 'WP_CACHE_KEY_SALT', '$GH%n]a$]8qI*oW[J?ASbr1!A48+g x<<]*4 :GU!$ZnC9(FG ud5/CeDzbIVfGQ' );
define('JWT_AUTH_SECRET_KEY', 'ZG#JWwz6Wy4Sk^iH&pGPM8j!Z}P=obo Eh<|Jv%L&WOun[-dg}.PAK}N*hZSPlVR');


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
