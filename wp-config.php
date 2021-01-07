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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpresstest' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'Voo4aX;6>,^6;+TV0VtG%MJuUmcQ03r:D{zk}H3qI^,:l={3MD<.<[vz38N!:D3+' );
define( 'SECURE_AUTH_KEY',  'D}uE|.`kn[6aTEC!D#R_RLX4Y#?z`!HD%<n{awEY,B9f2DB|&z,kUVa2ynM&-EP,' );
define( 'LOGGED_IN_KEY',    '2RX;V4db)&:K)5K(dw}ddRi.5#quYHEr4@F8~f3PIImVdouKHaQ#@F^ltA@3Mt%o' );
define( 'NONCE_KEY',        'a/f7 W In_pVQbz:Ise?ZU@TAGg)+]2-QI<% 0a`tud#wVXjnK2o=F-ez37P#x,)' );
define( 'AUTH_SALT',        'ha46I{kyf@q|$NXvsgLnw;Hv>t[rL?I8,f6YWSKBqmD::ArnTVl9B`4{K.2y|v3n' );
define( 'SECURE_AUTH_SALT', 'utm{3qhgU}PDp+|(JmNdkFG3c*mhegu!}rmPq50Of~/D23kaZM}K#I`DLTB]CBab' );
define( 'LOGGED_IN_SALT',   'Zi6EBGM q2l0;tl|4@hyxlOl{PU8%7GqY.>x+/]SrR0JNPqDp:Qyq[k W|eep[Hp' );
define( 'NONCE_SALT',       '24,@,ga/0fo2@Nyb%~Tnjo!A7u7vATY{$XfaP>!wC)+:@}GZ~PWn&aM*9jVK?M#^' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
