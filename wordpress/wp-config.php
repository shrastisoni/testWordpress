<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'etbJrs$$|o1V!nJBBWr>jiNN#R:%KV|Fs@s`%*Bfj~ifiy^l74HNagd3)Q]u&;DY');
define('SECURE_AUTH_KEY',  '?*z>qeQt/!>;]eVISg*+m:,p4[f`aFSOv #>amHN&eg44jrP<4% Es/:FdOnw0)K');
define('LOGGED_IN_KEY',    'OtAa&()#K&B]%Q 7w(LZ0(:dkXh9&a>B&C*uU7+A5]&Fhb!/}Z#>4b(X(|.~nG+*');
define('NONCE_KEY',        '*rK $pIOw}INKqj,]eDQLdVU]7r#h>|@lGH0z6BjM6JpX6.lSc}.So]$@r$<UcR.');
define('AUTH_SALT',        '>sL9Xien1#]>+WHYy8@!~Y>?aBW/fGp(0%}m>U,Z @jYT~[=k),rY[t00e3`w%Y@');
define('SECURE_AUTH_SALT', '}l24xW&xJ$MTPO12|[4Vj$J>-ovY~;cmR&`YJ!w8]C(UD72$]_)fF4ajC<%I>R[<');
define('LOGGED_IN_SALT',   '#=Cm~<_2a*#O(tJL0Qayf><p exz&e?M Ytcmyc&(_?y tI8KM9@x3@aqv8:-)1Q');
define('NONCE_SALT',       'ETKo&)=L@N??*,@L%!TXo5UYoxDGzr-:Y}Q#Br$SGpwY9 UOS% !AJH]X4G~v>hf');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
