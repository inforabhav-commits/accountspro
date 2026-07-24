<?php

define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
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
define( 'DB_NAME', 'u558618626_NgH3X' );

/** Database username */
// define( 'DB_USER', 'u558618626_NwQw5' );
define( 'DB_USER', 'root' );

/** Database password */
// define( 'DB_PASSWORD', '$8HN*xIrLU' );
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',          '1 ck0d_i&)%G2[:>)fUXj8+l`Y@U2Ouna.W-ZJN1l)}?_O->&v!w=5Bz>:Mr0rc.' );
define( 'SECURE_AUTH_KEY',   '.L3TfOY-,P@ZS&SoX+=_td5-(Z~,Ssq<GF!u&=PO#(,*&VK{>E|1^b3.~Rq)bDQ?' );
define( 'LOGGED_IN_KEY',     'zMcQ4ZLK!X)XY6&OvP#LCxj)HI^Y0ElTURRKm`.(E+E@7ne<=S18cagEcd#QNS$=' );
define( 'NONCE_KEY',         '.e&8H$2m[RUud@Yi #J6z_G|/Y(+EB=2`[S<8P#t}%~Vy^T%^#-/u9W+jz,MllIs' );
define( 'AUTH_SALT',         '(/UZ2_$#c;nsnz A1J%}g]l8%s~S=LK]acsMO4VDNf5bRM!7X[v,+iO, TjM`+yS' );
define( 'SECURE_AUTH_SALT',  'M{MnAt`XaaOpuB=l6w02,KJ]?rU^:CM(Eyh/ra{?.P3rJ`HfmuEk)V5(cfPQd5SA' );
define( 'LOGGED_IN_SALT',    'EnIMBu<E4+z.6mk48D54B4Pu!4ox5>kp3Rq(.B{[O@9T=5W}w_.3s(^`@>u!HH:@' );
define( 'NONCE_SALT',        'rC+Zv~3N5]0+GB2*_}u6HGPKTkby`YMrp4-zw-uV/P[T>ONcxk9|u]KbjphO<Sk}' );
define( 'WP_CACHE_KEY_SALT', '8,WY]]6]?YMu1L%W]vgFv/lMMH 7WlZuE6BIg>w}_a4iq{65<FBAGjKnKI/IpTB-' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '85a5e72d3b44a38c4cc9a3ec98500c54' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
