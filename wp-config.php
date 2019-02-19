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
define('FS_METHOD','direct');
define('DB_NAME', 'word_press1');

/** MySQL database username */
define('DB_USER', 'word_press1');

/** MySQL database password */
define('DB_PASSWORD', 'A@1234nijhum');

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
define('AUTH_KEY',         'J!KD/rX~ .P;M@v5O%Rlf m2VK$#i^#O!A}S!+,Iy_rk00rauCK@VLOzwwZ<8~y+');
define('SECURE_AUTH_KEY',  'OtnZ?n?=:wHXP[V^!aM^ULc;nMtvNSM,0}!,i{0B`#M;Di7]<c/X5(1};PG+Bv|V');
define('LOGGED_IN_KEY',    'nru1b B$<Kjvn_$jj&atuXq IFh}.:u$_xU<<9mW9{LU+kq<#DI5pJe5MWHB2ZNY');
define('NONCE_KEY',        'V)7Id09SR<x7a|ewLH1Bj1,7Jlg?sN]a&}C}GU0^ Q3^90eeo<8gj{Ju2*s^y]me');
define('AUTH_SALT',        't)]$7S/DiUr+y(GLe{RC{r3q[i3hx!cS@l88e|8g}b?>6Sh%#oG9#HB;EE`&|);i');
define('SECURE_AUTH_SALT', 'DYTH-3zc7vfXj>jgXrfc;o7DSIn,7Gh0pK<K0%cFMu|Ou64>2VgEefN;aQTMq4uI');
define('LOGGED_IN_SALT',   '+-pMEoSp&s;HP37|TH8.Ov+RbK(Yeq/!M[Z$N^76?,h8P,|MRs&d:PnFjHZ*l:/W');
define('NONCE_SALT',       'wG;8--4D^kf2pVWVaphim)k a1tEpJpX@>KJ%Y9OvwkK:mm<g_(6[{B@i~,jo3y1');

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
