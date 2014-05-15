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
define('DB_NAME', 'gospellynk');

/** MySQL database username */
define('DB_USER', 'admin_2');

/** MySQL database password */
define('DB_PASSWORD', 'gospellynk');

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
define('AUTH_KEY',         't}X9Ce.%E(pyu/kK lK~8?g6;WTU,3;hE, ,OiOCekORLI3{,|$Su`=(Pxitnany');
define('SECURE_AUTH_KEY',  's=eIqnmSWhK^Qa^M!(b2>?pl>~>T|kso/rbe[EMo=]51zlp|vkw|F]`.(0zXnUO@');
define('LOGGED_IN_KEY',    's2)69~l:6-|kOX:yc1?GRFjxX?I+5*bu:eVNZTQ.A_02VuMjIoP7ps|3GA+Kt81,');
define('NONCE_KEY',        '([Q#p*]Us.N.)j1Ky!3M$hnVnjkV)DX#Cs}bkF[?,7eI,ooypjz&7zdX.Lsz3`R{');
define('AUTH_SALT',        '?!ypwL}-DLX4z[<ss&,x)Ufh#[BiIF$}iGWjLu.kPR6,_1U)][4=/VXvgdr=`ncV');
define('SECURE_AUTH_SALT', 'j~h=-.>fYIIN!lxoOFa8^L[@znWS<PaFbkgE1zI0tB U:{Yr5(djtaGX(VgL70Sl');
define('LOGGED_IN_SALT',   'xHiYpvL>A2wK_=Nl^)6o#Cr7HF2RQ^Bm#2K fgrefM((+n6S.6h`v,cj`+xq*lK}');
define('NONCE_SALT',       'HI#g.&>IN^Y9VjTw-u+`o4e)N{G9QB(&G|=gjxP41?sGOc$8-6X .c^R;ixLc/-T');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
