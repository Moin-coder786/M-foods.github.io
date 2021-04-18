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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ']-IhCu9;~<.4NzN!127OK.>D-&IP6}n(;OQcMobS%gT0=|FG&pR-=/K+z1 e=xt[' );
define( 'SECURE_AUTH_KEY',  'A7]t:w!I/LPYwaX|><Aw]RwpS6*QU*]R]V1?]mT?,>hPDKJCNDM5TgfSDWUf-RAU' );
define( 'LOGGED_IN_KEY',    '% {w!A`9dfYi*_pbr@H*>9LnX1G/E@)QUjHQlRCQesI/@i!qo5d#[Rw1nVm-zZjO' );
define( 'NONCE_KEY',        '}o92Ky2E`>V6|XNr,4^8ZtC`Ww?cT6Y>lvvc}1Z)6R%(pCsL#&C)OH4LZM$}0-`W' );
define( 'AUTH_SALT',        'WT$dO9zF/I$kI|#s^dtffk%>gVN`p+kE{z+1HC4VAiG,V<ho${eT$)BJubD$t#0<' );
define( 'SECURE_AUTH_SALT', 'lO?aK+C|/4O4{Sg(.5guhD6:pg031f+&+.~0}[8|Ijc,:t)AhH5LZ?S[AiiP4.N9' );
define( 'LOGGED_IN_SALT',   '=aJYQ6Ch)!8leE!=!m~sJV}}5ixy4KmBv?v5K9aG,SQ[nQH~Ld!@P3CXx1DQ^Jy8' );
define( 'NONCE_SALT',       'ug2b+Y0Xb0btf>+?l-;_c,2YNXpdH5al{~&dP3bJ6HEZ{Hdh_UJBQW9iZ(o1j?N6' );

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
