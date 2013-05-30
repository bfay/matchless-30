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
define('DB_NAME', 'rockinDBo1wai');

/** MySQL database username */
define('DB_USER', 'rockinDBo1wai');

/** MySQL database password */
define('DB_PASSWORD', '9eKFQvny6b');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '3{u^rf$cQBbPAX6<$<ymynXxmW6TH2E;.i.iT_hSHeD2P;_t*te~sdpdO:K9]5#-a');
define('SECURE_AUTH_KEY',  'SVd4O[w9#_phd|!zgcwokRN4dVC80@G:|!ok},^nj@zrYUBgcJF8,NF}>vr3{>ur,');
define('LOGGED_IN_KEY',    'eS:5-h]xtaWplSLH;ldKG:[C51o1~-hdwtdKGokRN40JG:[z:[wsZ!sZVCO51~p1~');
define('NONCE_KEY',        'sRZ4K|_JF8|!40[vsY!okcJFZVN40YQM30>B7,^nj>vrYUogcJF}E7.^mj$uqXUnj');
define('AUTH_SALT',        'mmWTmiPL2;1:-lh-dZGphOK1[S95:-x81:-w[!~khNwdVR81ZGC5_~F84!@0[|sog');
define('SECURE_AUTH_SALT', 'x~;~+lSplWDaWH;*WC:[-:~-l~plSOhdO51ZVC8|!41@-h~-hdKsZVC:kRN40JF}>');
define('LOGGED_IN_SALT',   'WL#Cw[#spW~ldaGDWOK1:#NK0:zC4!@kh|soVRldZGC[5;+xeatliOLeaS96_LD]#');
define('NONCE_SALT',       '_xSJ|[k@VdZGC4!YFB4^@0>,rn!@kgYFoVRJ0}UQ7{FB3^$j}zrnUQjcYFBjbXEA');

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
define('WP_DEBUG', false);define('WP_ALLOW_MULTISITE', true);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
