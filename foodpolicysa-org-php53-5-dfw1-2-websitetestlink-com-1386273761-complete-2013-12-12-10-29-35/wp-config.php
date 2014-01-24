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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/mnt/stor3-wc2-dfw1/490162/www.foodpolicysa.org/web/content/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', '490162_foodpolicysa_org');

/** MySQL database username */
define('DB_USER', '490162_foodpoli');

/** MySQL database password */
define('DB_PASSWORD', 'FhHHZN*4T8xt');

/** MySQL hostname */
define('DB_HOST', 'mysql51-109.wc2.dfw1.stabletransit.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ':42tIe7=Sr:w8ZB9OqN9m07}iX85&?"0R}1]c8-5{%|5CB%?2pX+}5-fq/l4*f%x');
define('SECURE_AUTH_KEY',  'd&vpMe/J./css?g/e$^bGXr7PM@u3O3^t[2^9"n0+zseoJ5Cl-O2G&w:q6o/U?7<');
define('LOGGED_IN_KEY',    '_02:5>:Qmm5L70<,SAR{e<.F;ewN21z+@|*D<@/9{WU3tHR=(7)[:0A++8z>99@H');
define('NONCE_KEY',        '9Q_Uq$5mxn>15FLKMsFF|&q=MZ0iwI12}KXolqLSNyhg$32n;54;_;%vSMO<:d,.');
define('AUTH_SALT',        'XNf($1yp{PF!g4[9aY1:Q&p6q%:j,-aNvpt7>3w=g@Uw&PG?cH-4m8!M=47#M&n(');
define('SECURE_AUTH_SALT', 'd&vpMe/J./css?g/e$^bGXr7PM@u3O3^t[2^9"n0+zseoJ5Cl-O2G&w:q6o/U?7<');
define('LOGGED_IN_SALT',   'O@x?g!j;^nR/?aX}t1V_6SCqZFU3$1vqz4eQByJeV]6K84HC61lzTXZh1ik^(Q3f');
define('NONCE_SALT',       'hh6SQd89b%UjG0Va1*JVD7#Fp"i6Kml3D,j/2,1e4Wx8W/iY02hb0;Q{<02x:o]x');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']);
define('WP_CONTENT_URL', '/wp-content');
define('DOMAIN_CURRENT_SITE', $_SERVER['HTTP_HOST']);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
