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
define('DB_NAME', 'switzer');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'YxqVJr6GmK?R^mq=7};[?3TN@;k.^_y+]]+gy_|Mu]Z`9 <(os.f3igVm{+)A%9R');
define('SECURE_AUTH_KEY',  'Au;dL$8f&SmRQq)}%f1A3sn-ICi;T+,.;{-?TVmD*?]Mw|4N+o%.SGA9R61,XCnj');
define('LOGGED_IN_KEY',    'v++rkb>so4d$BTI5(Y;gI+Y5Smtg$8 hAp(H~u t?)4a}q]03;Tjb, NHr|[b&GY');
define('NONCE_KEY',        '+bd}&-Y9JcFo(exnWPas`rCvmPmYgy:$a0nvYG5S8vK=~|$8#DQR+a6_?1yGfb/:');
define('AUTH_SALT',        'd#i7KvyK?JXhT8m,fOG><03cd9UzXOE}j3m|PxL`hT9(wWe>g v!Oa9,jRVsD` G');
define('SECURE_AUTH_SALT', '8-0F{DO;ufqoPr5baUY 2=1A2}8P9?=S|[7k+.2v%N{6;MGkR6r|ac4}vEk2g4#.');
define('LOGGED_IN_SALT',   'OA>k#nYLv^SL-_Vs6I{Baq2}:3pzYz2@c$-Bm>Nd*TY{@@Kwh_yTX?BL& u`D3xt');
define('NONCE_SALT',       'j:mevel`(p]3w]z-6Ug0 Z<K;qIDf&(2;saeJ}?1,z#BFdOc%E4W}MlG&hAB)>14');
define('WP_ENV', 'development');

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
