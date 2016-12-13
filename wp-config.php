<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'root_db');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'root');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'TK}CNclyG7c#hQ $WUfw)M96Rcv3;|yf.d.g;5rsJ19{0~pl+@J~gJWt D3LRSd`');
define('SECURE_AUTH_KEY',  'g9<fC~VpQ[$-%qo?YCY;^V+zKfF_06O*ZVj<=;9&<E-0u|MRr9X6lx0#Rz>mSd)-');
define('LOGGED_IN_KEY',    'AxQV+H;dl1>h*LXxPBopu`Y.htKD<:kptel0lIE!,z8u3~}Mv*PrT1dVoz05?M4p');
define('NONCE_KEY',        'HdVW&=k7=:&6Is+te{;@aF9^!-Vu@i0D# A+04qzn|8@1{kL|T1bv tcer!JkRF ');
define('AUTH_SALT',        'h1cfwT%!lw.b*ha3tz-U8T>*?~%YcG6io)NOo,xdSp;fNn@ml9RRm^;q-m?_HBOn');
define('SECURE_AUTH_SALT', 'j!wcn+V)N-!@9hu;g,vrvv6aX!xp2r-%@BT-Be.%|4l^b(,ebY@PoqZ}S(R3P^Ri');
define('LOGGED_IN_SALT',   '21DucT!81<Me R g5m-Iou[@}Ll`Qy{ac=)bUF3yEL>UMtf$-LMO2AWP,jN5s>+;');
define('NONCE_SALT',       'bJWU_!yXGO+{F,7JW+0pbTOqFo9^rcX4k~f-}U3(qn04w>9&=T/XX#_]8D*(~9n@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ahw_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');


/**
 * Set custom paths
 *
 * These are required because wordpress is installed in a subdirectory.
 */
if (!defined('WP_SITEURL')) {
	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
}
if (!defined('WP_HOME')) {
	define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . '');
}
if (!defined('WP_CONTENT_DIR')) {
	define('WP_CONTENT_DIR', dirname(__FILE__) . '/content');
}
if (!defined('WP_CONTENT_URL')) {
	define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/content');
}


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
