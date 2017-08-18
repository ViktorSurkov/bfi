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
	define('DB_NAME', 'bfi_db');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'alexs');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', '75(.$^X;9W;Yz?SL73@k');
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

if (!defined( 'FORCE_SSL_ADMIN')) {
	define( 'FORCE_SSL_ADMIN', true );
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
define('AUTH_KEY',         '(,r(b4`ox<f<HV5)}V,?4sLy-.x+AhULn+;sd?(0~5-~:.R-F-KJoZ4lGmiBb)q6');
define('SECURE_AUTH_KEY',  'iz.|~4JTsKxv/8Mb<SkaaSoK<=@i)QE%lS` QY.*=H/[i)wG]s{lp$_7UE2U-zd}');
define('LOGGED_IN_KEY',    'Xs>;}YZnh{t+?XHG)Sb&Kh/rly[X-/?nup)<,MbS-sCz6x,p.ALeY.d/d5#4nf8?');
define('NONCE_KEY',        '+O>0sv^74/m`PG@8Di /s-mh[5 ]U)jO0ilut+<o;e2v*e vD.5?21Q;-t+sLE^h');
define('AUTH_SALT',        'I|_Q.pf1LetD.Q^,A#%}ofO0& U$oxCZ@0S5tt&!5Vs_=^a#8|ox5cNAG5G@d_F|');
define('SECURE_AUTH_SALT', 'Tr+&9[M]llA$)L`Ie|hL6`).m39L-*#QOheIys2DB-T@*oe*x^=>U3|q(dCX2iu|');
define('LOGGED_IN_SALT',   'Nd.}7ak-c-j53+wsV|sT<Va. tUZaFY+H/4znAFM+>{wd/hUF{SyhDyy>bg.+e9Q');
define('NONCE_SALT',       'JIl&>9.,|#?UyF_KFSLYSl@L3j0FF(2;@|Wlf`Zc$eiD}$]Zy>dnzOk:dO(&p33B');

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
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
