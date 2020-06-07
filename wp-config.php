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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\wamp64\www\blog\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'blog_db' );

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
define( 'AUTH_KEY',         'rD/x!45z]B?xZZ]X@>K9)G*!l,cpSK ^NSEaYA{z3:0K0nk o^Oo5F-l+_|Al]pO' );
define( 'SECURE_AUTH_KEY',  'H4R6I co@2#vtL0(TR~5%a/Q!X_dQ}2$ K1]zzhCqb% u1<W(_&`7g?$7%c{lN=4' );
define( 'LOGGED_IN_KEY',    'q?sTbQ&#:o,+<P]EV7zT?ZpN#;g0[To^oHQIz>6qYJXVufl`t{YJNU(?0hYtN!2^' );
define( 'NONCE_KEY',        '?Ca]&]Fvo43f4JaZRzOiC~aS6jG*:xItN/@{Fd.93rfw:%A}rg99p5hd}t%e~&?F' );
define( 'AUTH_SALT',        'nWkKx.9)s~@xYRiyYIRG J3ZmvT^0QkiTP-:U=-q^!ZaH6V0QHK`p!O?v4:O|RhJ' );
define( 'SECURE_AUTH_SALT', 'DEizpvCP3&<Pm`LFAs?fs:=x^QS.J` [on#QLlcJfGgRGd]Se4dm !J~EI`#y(IA' );
define( 'LOGGED_IN_SALT',   'ZN|eGq;F>JUa5#V!@W~)2}:HM4O-:*nQ*&:mft)t|OPaStWDP<ttK5Dg&X>|Q7OK' );
define( 'NONCE_SALT',       '>^xg*S@ph2!cC& DS8reQa4{X&Zp?F@.g.09jb>Ud1}(9Ot>t4@E$e&J`<ABnWnI' );

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
