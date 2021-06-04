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
define( 'AUTH_KEY',         '#.zvgf[*17Nsg=8d|xN6FZQ,eeV`T*^[]SxvxRc.?a:IcZWVJnzKlazkGog7!l?D' );
define( 'SECURE_AUTH_KEY',  'cJ((TVH%Q[Y2.jTFeDF~rL(4krM3kC=E8wNIa*AQ&Y@,Vlx`{%C_sB/5QAo5XYcB' );
define( 'LOGGED_IN_KEY',    'ox+B$N.a~>Es;aF`orXa!@F|rfDlTkWeqCiVI[,kK6e4ndV=(l^yJtn$,ww2Os`r' );
define( 'NONCE_KEY',        'voM.Vu%Qzozd#E4}5Dh| .Y0.ERhn^nu%:&p/ZmwW3uD`u~,a5jz5H%B$5sUC3Lp' );
define( 'AUTH_SALT',        '/HG9izYPHa<jbqq*>XKnCY]171Xk|2S>=<e(C>FJ;-5FgvLu/2~&3~}b=0Hgq.f*' );
define( 'SECURE_AUTH_SALT', '&tapY-cJnY`3~Vj&LV&V[TzNBbN:cHGZfmS*>]@41EJ|_oD$/vi)SHa;GtSk?z#*' );
define( 'LOGGED_IN_SALT',   's/@c}3T;W_slD?MQ84VAZiE|dFMC/yMW7lGOj=QOoe$%Ne;^G`<%@)m0i_,l:ib@' );
define( 'NONCE_SALT',       'u)Hr]X%0oRGP534k4EnfbOuwJUu=riilHL_}?;2)W$12FN:F!;YzZOq/D1_!1{o{' );

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
