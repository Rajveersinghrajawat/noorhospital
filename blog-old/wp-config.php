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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u684115335_doctor' );

/** Database username */
define( 'DB_USER', 'u684115335_doctor' );

/** Database password */
define( 'DB_PASSWORD', 'WBqC~I/1c' );

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
define( 'AUTH_KEY',         '`-(c$n} dA!DFCcO4+o8|c/7GOV-xA[zsTKgLz-[k{{mk3PNWE@Wm>KBczK{U8A2' );
define( 'SECURE_AUTH_KEY',  'LpN9B6#Y$}|/I+B9X$hrNZEl#gu(}2LIlRfi|l}Py;u{g<DaYLK,qA*Bi>!ph-QT' );
define( 'LOGGED_IN_KEY',    '%WJ5ei_7{CRQCk*aY%c1&!(R:at-;o7j:yr_i0cwNJ1-!./{1%MVR1as~7uz-ylY' );
define( 'NONCE_KEY',        ']1i(:Ia=gw0vHKnRULU0?/b#eGH$j>%k&&qeGPdj-8li+:XGy9|%nI+]+#+=% z$' );
define( 'AUTH_SALT',        '!>^x|WCCf)#FL A<]LT2Qh1_z6wICI/CaPvSfrcINQ^Wf*rJ/opru&J?EL>,!BHM' );
define( 'SECURE_AUTH_SALT', '1Gj[!o_y@iZe`y{n>5qxa!Jfi1pe9yt>)yQEfX-^jhzV6J6n{@Q0]!>ggZ#!S,g*' );
define( 'LOGGED_IN_SALT',   '#XpT={=g/zN.eEaL5$wED V^e*dZ%$Pl*>5/QiE03jRx N2h+5iwB^J_MT=QrzOK' );
define( 'NONCE_SALT',       'Q,Q,j_sJn=:/Zt|t*d@Uc37N<38xKm<g<D6K93x)RyzorV&I#@G#dcHG1x+EF25E' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
