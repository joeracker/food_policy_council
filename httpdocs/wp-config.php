<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
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
define('DB_NAME', 'LeslieEProvence_mysql19d6e28e210b6a000fab8c0694c590dd');

/** MySQL database username */
define('DB_USER', 'usr6e7fdeaf6466f');

/** MySQL database password */
define('DB_PASSWORD', 'cG63FhGhEd^5');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '7sPn(s$BfkEAeHaecsaK5r8sBxqFo%r9vM(CU(0@vl%L1f6w7uMz@kX!%nPGOI(k');
define('SECURE_AUTH_KEY',  'oLze%szoW$blgGstVD&hMIkmUJJ7t9Px7&2dEFep!sHzia557DIWXlv!@Lr4Dlm%');
define('LOGGED_IN_KEY',    'Z(gRY0b6UX&1C*oI4HABev^yx32XBuJqB@#bmBDkOYUCQabiPbiWrL^bsY@88(cf');
define('NONCE_KEY',        'BH%MdwKTMd#lScYj2peN*4YvJpMIzlsSpSAK(Cp)vVNzbLTb969jlb3g9^(Zi7wQ');
define('AUTH_SALT',        '2!jD7@@pKX7Sx3SzM@WQW#wD^NMadLU^sI8XSBkJUexdlZXdJsTBQ!pi4sK2Kyqr');
define('SECURE_AUTH_SALT', 'W(eBuo2qt3zdymK7cAD(W*Bq$I8$qYZ3lcaVm5ruD$bF3J%pxPMI#xjIeO2JcY$I');
define('LOGGED_IN_SALT',   'P$vtJep19jI$vIMilevJ5#p28culwKy*ln3EDQOxlZFw96VZl#GxQuEv!0VFWk3O');
define('NONCE_SALT',       '4Y(dA@(QYX^jL&Z02ZI*XwHAnmo5pEk9eTBp4ksO#7so2Zn$nZfdXq5GKoBA0&o4');
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
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', 'en_US');

define ('FS_METHOD', 'direct');

define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

?>
