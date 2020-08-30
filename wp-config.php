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
define( 'DB_NAME', 'wordpress_site' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'W2;gOjav@go<IS_99AV7sw k|(dIV>9JW^SC )X};XHzQ$o|>6`<WS94F16Ap!lr' );
define( 'SECURE_AUTH_KEY',  ']-+!Vbx^rp6GV`o~)~=M25E`2zt4CSAGq~k_)mnvs)H[ULCg/qOuaB::w69RI*yD' );
define( 'LOGGED_IN_KEY',    'j(6GwuPR%wc9)r3Q4b_N4W-J~g5iEz+R-=No[@+?JTAIJD{vjza{VcQ-d#fP`DC1' );
define( 'NONCE_KEY',        't8%FHT}cM3AnRu`pN/=|,dL/6ZQrYDm^5~pAUTpHc>tVL{|y|Q3>QW Uo-$hmZ>U' );
define( 'AUTH_SALT',        '7.|t@?%D&KoGr|E4!a3XV mF-s!?jrze^EK4uq%674L(~!10cbBbD  ^z7umuCE&' );
define( 'SECURE_AUTH_SALT', ';f<ZjJ30A@R;-ejn:Hzi d1];uT`L`=tLZ=SIc*=>B:9|3{2zL|[wjZ)/O^]l~5%' );
define( 'LOGGED_IN_SALT',   'VC>wCLr*-AG<pHo{IGUCc1ogjFz#{O(nx{B46ud:eF1UllDr2)Hrbd%kIIkaY=aa' );
define( 'NONCE_SALT',       'KGJ/%arBn%0W*>dD~w-F/H8Gr_gNXUy};l6peR0gm$>`1pGZeO~7hJZx+jDZAu%.' );

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
