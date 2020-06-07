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
define( 'DB_NAME', 'blogtest_db' );

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
define( 'AUTH_KEY',         'FX|!wX ;7;<z(SR2|9pH7wblDF/MKyRbv(@:CAHw(@3 T^AlGGIc{2I-V3G0]O}l' );
define( 'SECURE_AUTH_KEY',  '8Bci88?O<`E;%@2=* c(;LlFeNKfOQ%jzXgk-WA }|ZxO]nhQAn[ZL/:t&i<E|Wk' );
define( 'LOGGED_IN_KEY',    '*qFaMb8*=$c|CYEK8HA%K?PYu./d5--i1rd.>~=8:]`gg@4%FA}|.[9Yqj>8P^`V' );
define( 'NONCE_KEY',        '-5qgNR/^DJZ4 ~9gQTRg1 $k`5w)<u:-TYId B{w;wQe7QN)gUmI-p:~#AA8=vGW' );
define( 'AUTH_SALT',        '-USGb4RPy|Z(lt~G%f{-2w`j4,HQ9<5Q.y96;ZLZP&hi-vcY|H_rde,o7f*{,+y/' );
define( 'SECURE_AUTH_SALT', 'O&X;!Bzh|kD^)|H,aK%[P7Bv4vghZEDuIo;gr*;C)&d@,Bu:a |=|x%$z^d0E.JO' );
define( 'LOGGED_IN_SALT',   '`Ef8 b)sEN#{G+T(HL}cCK<v:8JwnkT@W7V(>c43?!7ES%zU{Rd*ga>fz+$MC4F>' );
define( 'NONCE_SALT',       '6}z]ho038h56P`pl1r{=}<5yo,fy`=}z-|1stM#7T9^A[8eoK5-C88cxi@C@lohO' );

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
