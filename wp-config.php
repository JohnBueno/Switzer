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
define('AUTH_KEY',         'v7t>%wS$?T(rD4$%xP`LVNNI((iya1|1j-vGX92^Xwb};>YWqj-?0$nx+Mu[(1b!');
define('SECURE_AUTH_KEY',  'R2es5n%[vU>:Qe^,w-Y<5L[p+3yj$,qe%y|t.P,O_%PX42#`w|FYqxHGs0P@ <Ot');
define('LOGGED_IN_KEY',    'Mef_vR=b3<k#^:gW.DuD3,K<}-E-:&?^d.N||_W{-%23fRWzysoVdfUknH2[^B2S');
define('NONCE_KEY',        'w~ZDGh!4>B|_.Y^3&W+t6zCb=;kKz?@-BqjK5H3dqjG^nsD6s+.P4+xZ&UO:b^9[');
define('AUTH_SALT',        '+-zkJo.ktay`T-f>:$86U(C>Z4dLp!}EZ-PX>dGqw]ma#@-7psP|o<i<.vOzi~*U');
define('SECURE_AUTH_SALT', 'H-x#ok,TCK-F+X0Kg8H1-x%VyObpk?j!?Rz55J0+x$m+&x%b3MfLI#B_2_BW4aND');
define('LOGGED_IN_SALT',   'X3=[3+_L] >{pfl%CrzC+$a!AY5dlB5U-[8De`[Z9JB<|4R3jZQ%}8QI)-(De*pr');
define('NONCE_SALT',       '1G^*dgPLbR) 53LyKKYT/Wa(z/$G6${43T!%}T.V|NTx64`W,w/Zs.8vXiX3%s|8');
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
