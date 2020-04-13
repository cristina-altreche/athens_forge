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
define( 'DB_NAME', 'athensforge_db' );

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
define( 'AUTH_KEY',         'TycL@=ekdo#h~!YCEh2AZ7R3!RuT]27@SlZ`R?~zIL8:Q,_{jCi.GnW2Sfe=l~IF' );
define( 'SECURE_AUTH_KEY',  'Ak&B[f[h@<_we-^5>T_).Ud_5/<k:Enx|iO4y=1q|G^JVH)zL<=L2Duw?=q|tW*p' );
define( 'LOGGED_IN_KEY',    'G(WsUDbl@*DMt` %]Gv0`Dhm(gFY$e`AKF[;B9ZO7#hVbWZrn8;AY&vQ:%tzvC*X' );
define( 'NONCE_KEY',        '^xDF6NX04E 2k6S6o/0vm=]@lCEd{&x:;xzIU^M+(d u6Z?.Hs0{fpj]gvPjGVrc' );
define( 'AUTH_SALT',        'JZ4Vc3b2G(7]2L6o-: *||mkk8 N5-,a G9}54A;+P8YoX,[D(4M33WE|Hp2&>5O' );
define( 'SECURE_AUTH_SALT', '3JUU&r},IJw~BDmUe9f8Zz%]]kUcUV4pq>n^qY~e&Ei}lP;qnk.??1jRN+}D7AiE' );
define( 'LOGGED_IN_SALT',   '@lT{(>`wm1&%Nd(Y#$5t03{dbsTc?4A,|/&~)<g{g->h4mh;d.BqmWR!f9Z`%1P0' );
define( 'NONCE_SALT',       '1UD-}qRt%_P,_O+IYDF{Y)D6!5;dAL#ZUtbW=OkpZy?Neb Is4C1zI>ug#@C7gz}' );

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
