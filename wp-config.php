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


if ($_SERVER['SERVER_NAME'] == "mani-care.herokuapp.com") {

  // ** Heroku ClearDB settings - from Heroku Environment ** //
  $db = parse_url($_ENV["CLEARDB_DATABASE_URL"]);

  define('WP_HOME', 'http://mani-care.herokuapp.com');
  define('WP_SITEURL', 'http://mani-care.herokuapp.com');
  define('DB_NAME', trim($db["path"],"/"));
  define('DB_USER', $db["user"]);
  define('DB_PASSWORD', $db["pass"]);
  define('DB_HOST', $db["host"]);

} else if ($_SERVER['SERVER_NAME'] == "local.mani-care.com"){

  define('WP_HOME', 'http://local.mani-care.com');
  define('WP_SITEURL', 'http://local.mani-care.com');
  define('DB_NAME', 'manicare');
  define('DB_USER', 'root');
  define('DB_PASSWORD', 'root');
  define('DB_HOST', 'localhost');

}


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
define('AUTH_KEY',         'U~86q]Q=r.NUZxjy7tEE+g]3b.ZI &?LrSY<8%Fp_,bJ!2?2j-fh5}+>0:gap^(c');
define('SECURE_AUTH_KEY',  '?2gv@B*7&H(K+$CwuP,d/sQ#:|$XRdJJ|B+B#k1rm&ZRCa{ttN* (s`p&!h<fL=E');
define('LOGGED_IN_KEY',    '-W(1nJN`p[zXGR84=~9E }6|||+-9L)Qb|T}In/I:5JP?.I|ZZx@y}^Cl$0c8Q^G');
define('NONCE_KEY',        'PSW>L~p._x|jVu@W%A+}Sxe|9BT:@wCw8.|/9lw!Z~9-{]ZiwE{jQv$pqu]u?%X|');
define('AUTH_SALT',        'saMhu`%o~%^6J(#!G^da+V68m#9k=8c-h,$3h.N-o:nChr(lp3$B7#3r3kuS1~KZ');
define('SECURE_AUTH_SALT', 'eqgS7pS [fCvJ1PWRk.Q2?3lmj4gs&{M^EGsH/Qz4,?AH-/DD<W~Fi.h^{xuaI&C');
define('LOGGED_IN_SALT',   '+>J=7t()@!Z-T$0usmd+-YCI1^j4-xTY|t!O //t7-+!rz<-4J$yztmyruRFI#1W');
define('NONCE_SALT',       'NVB33d>::]:/dQ$Laz]gE?jHLyBD/l/c4qK]B1am()`1@$pL4if-=b31+nAqa|p1');

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
