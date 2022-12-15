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
define( 'DB_NAME', 'sunwater_db' );

/** Database username */
define( 'DB_USER', 'sunwater_usr' );

/** Database password */
define( 'DB_PASSWORD', '1!qaz2@wsx' );

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
define( 'AUTH_KEY',         ';y?JSfuy^^e9(uO,yp~1xjE=ievuuW1YDs@@:aieH:znP{K9E=0ZRp!DXKGd9nHP' );
define( 'SECURE_AUTH_KEY',  '/<)g0CkkS&n2I..es}/H2j6lniP4nThL)xO R.o(waozpfjX>e+&ChU<20}Q.o#x' );
define( 'LOGGED_IN_KEY',    'lqYL:*?THa4vgJknU@WU+#y)[6cR)=k[d7678*)4UY$Y0;^}YZp8K8ECYd-Z@z<;' );
define( 'NONCE_KEY',        '$0)r yB>gr?!Ss;-[KPb*L#Cfc-3@#!~[vL!#TskY,J]TFv,Yp=W0bnS-ksqcv.=' );
define( 'AUTH_SALT',        '6HS}E&z#^c|pt5JB*G!#!r[;hCG(.$U[*JXdplguQ/ae%mQX&6$XvD!WnS|(|s|1' );
define( 'SECURE_AUTH_SALT', 'Zu?8ti`d&u<2a|3%q0h[UPQ8ZO{EW%!{IT4D9H0/xob:;r])xS#z~`H^?R1(7tQp' );
define( 'LOGGED_IN_SALT',   ']ba;jMO^ZyVmd.lb+v)@RW(]7jaVVck]wKED@Ky]FO,HHg5tl;1Ql.*<{2gRqQ/d' );
define( 'NONCE_SALT',       '%kJ8]X|ee.j~y9<!(}Zn1eI|B(*+<95g~aHk]:HGb;1]f9I:?w,d@9IcIjMiH&%B' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'snwtr_';

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
define( 'WP_DEBUG_LOG', true );
define( 'WPCF7_AUTOP', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
