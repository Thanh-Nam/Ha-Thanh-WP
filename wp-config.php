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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'changagoidem_db' );

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
define( 'AUTH_KEY',         'U*L`a>?}mGt^indo?Mi9yC&K}JaxcJFtL7-;Y~.(wzqr@)F*p_gfQB16%L$v:.VH' );
define( 'SECURE_AUTH_KEY',  'f@4HA]e%b.;|CAJ)f$2qN[C>7P&@3*bQTD/t4_*S5o9OHLQ<M{-5.}!Qr2/~Yk>R' );
define( 'LOGGED_IN_KEY',    '_9+;JJ>7Mt7o}nB8DIoiru%#R!+AT}8u7iWQ4@ ^RjeZ!#Z}&o_2m<|zZA,92p8b' );
define( 'NONCE_KEY',        'LHER`x]N=A&I;,mf2sb:6[GXl TUlX(N:0B%xl4j{x1/rp{H=UOtdc6,b6sR>$[e' );
define( 'AUTH_SALT',        'd^4g|DEZ+uABOsBM8id>P2eX 7,@]0$j*HdCj1VlRG:&+?2Uz^wF-C$<^@jPXu`3' );
define( 'SECURE_AUTH_SALT', ')[9Vn(:%&wa**sF pjffn_S**:yj7oxA?!P1MJXlP8>Hoj6H$n#4~f`=PnK.X5=/' );
define( 'LOGGED_IN_SALT',   '&[V=*=-4GqOu/vId]aIhGIOmF>dz|#KT~B8_]5+Xg]?!Q*]1zcc{_*18R(H|*#/v' );
define( 'NONCE_SALT',       ')lLP53]#)gP4Syu(`m|#z//nJ^X.7ld)>F7E_N&VNd/3HLQU| om(NC7Ng5OymFl' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
