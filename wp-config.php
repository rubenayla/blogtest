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
define( 'AUTH_KEY',         '_Y<[h(0tmVAx_YX*BA!|[-D(zu,D/H`v!0~W)e;EfdI5$Y$])[5k]PWfSYG`gaCJ' );
define( 'SECURE_AUTH_KEY',  '0-tt@9X-]s 9&G[48~>$u|;&CLW=2bi%5`,3[!un9&q)gr_BJ9Opq;q,a-pxBoa4' );
define( 'LOGGED_IN_KEY',    'bnv{>!dMB&X&%1{t^Gt,qVjF[yXACZ>)jv(ZNxqO.Evk{$<tjR-VkH&vl9!Jy`K/' );
define( 'NONCE_KEY',        'QNB>-U(YPf`P},]oSn+se_>Dyg=Ui1}P5BcW^5DiqbA,s5ambBec$_og8#npI0AL' );
define( 'AUTH_SALT',        'U^hjR{CJWB6q?ue@>=KX%; ,<P[&OL{C-Q$4]0]MLdvq6{:?*-mW$qiZJ`Y*x(Q^' );
define( 'SECURE_AUTH_SALT', 'K*4W%UlX;G_6dJ3^zAl?Jeu.uvpqS#SK!M;-/A#ancc;1>Yf1Y26dh+)Y[MK9VOe' );
define( 'LOGGED_IN_SALT',   'Y1t:)K)O|dg8!gMoP29<D=#4:TK -5N>mm-.#AR)-qyRU}H9u|@`8A&7`F-O23e(' );
define( 'NONCE_SALT',       'NS7Ag!r6s9^{$/2Tmzp!0%Eh7S<PV6b]iIhbZVZv1_sM}nP;ZrVbgJWMP;ys4~vv' );

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
