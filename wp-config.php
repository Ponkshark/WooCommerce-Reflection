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
define( 'DB_NAME', 'woocommerce_reflection' );

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
define( 'AUTH_KEY',         'Dl?IcBi%<Y~QJs[hZf<j}KUm.gSPj!wU4$5o3/>YzA~lt}G0HR3RN?<G&{Ce+#oS' );
define( 'SECURE_AUTH_KEY',  'D2/b1gP<j+zYli{-+Jz(!-+@VvEu@m-[4,oij;&w/E<tjq9RI,-$RZah_pC4NJ~P' );
define( 'LOGGED_IN_KEY',    'V@rF@R)Zfb>hgsN4hIAJy[FmT~X4M{?]3s;-[[[Oizdm>)D^Br^Q{w+B!HgiI-[,' );
define( 'NONCE_KEY',        '<^BY<9?:iOsE#on_}MEFp[m)G{IU;!Y{kJmG U!dV&<$?]d8|G3V9P^>Gz0~RHpy' );
define( 'AUTH_SALT',        '?,z=ua]w.ru^2r.a!ay5,/rj1J%d&p&%P%+ 0]srYs@F&yuDbUL#aL({v8}nnzO_' );
define( 'SECURE_AUTH_SALT', 'vN[3sYtlSuzk*XN:+OnRHsjQ}L21f`yY[?G!qKvxDF/:WP90{{Jx9oa,(>kl%J;6' );
define( 'LOGGED_IN_SALT',   'x(@WT4f6=|t|!<4?3~hP3 uVX{|aY>?xlST6 ]o3yqY]CE>5|7+TiP`ydWZ0p+Kj' );
define( 'NONCE_SALT',       'G+up3!_!0~a|{|Y-E=Flwop|-_RJPd%{;(Cgou3P@qNpJTqbAx-eipKXpD-${(d@' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
