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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'dog');

/** MySQL database username */
define('DB_USER', 'rbaker19');

/** MySQL database password */
define('DB_PASSWORD', 'volleyball');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'gv_xSO%Sw~KQ~?4h5GoseNr4{P-70]W(z@#5?$L)O/FfIV{g`2l6S~qUX)POOZ[x');
define('SECURE_AUTH_KEY',  '=w>s8dqPG=bYa^;@dd9lPT+NZKu[8TnO43xo}`5(MwCmmq4+m<EqK!=4~X5Q4cTa');
define('LOGGED_IN_KEY',    '`!-b?iR)GCXn7?hWNnflbxPf?-i~S3Bx5lCl7%.Rjz|}4xZ~LF=WMGLT}LZZHpKL');
define('NONCE_KEY',        'UeA[ube)Vj-qeh=[xMKiPO{|g8H3NIWJ19FLm=S>k`P1_l!yZjZm;|,m7:?z8urG');
define('AUTH_SALT',        'D&(+erjK`z4;gMlN01}d?MH~TD@bWsIt0(/}Ib7<x?/ekwtm`l`m$tB>2|sP~cK{');
define('SECURE_AUTH_SALT', '6vh-.BW3x+)?$zsf^2E@]&N_OjQXgps:+a*49uY^!bE~H#CID_gMp*(%{ke -sb7');
define('LOGGED_IN_SALT',   'xZ`B6S[6fQ=Dff;f9;pKx0OcYn:AFFXD(R7+%ihqdk-ti3e ,ykueCB;{760&K5x');
define('NONCE_SALT',       '7o37WfD,l<}zdrG:ssfH_--1=1zF kx?*b$Tr EZT*_z}|rH2N/rtQr*TB{]dUr=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
