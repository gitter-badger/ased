<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ased_db2');

/** MySQL database username */
define('DB_USER', 'ased_user');

/** MySQL database password */
define('DB_PASSWORD', 'TXuC5VVQCPf5WX5w');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'N dCj<lbCyf:Gf/0O;k/;{2;?#q_K+0=|h+tl}^Vb)T8irg~~-2U Z3M%bY02aY(');
define('SECURE_AUTH_KEY',  'eDde)j3wW-;D5GK_bRk-h!YH$m-$aw!-!#7-N{fE.kT/SzQI| 2r3lywX)^3Fy=Z');
define('LOGGED_IN_KEY',    'N+!!+ORg-?^alU(NI6S0xY+XY&>%jf43}0_00vB_=-F]#>Cb1FSYsbEGtdnK2(j*');
define('NONCE_KEY',        '=f}$4^$B0%1N-hV8H#~3bhvjKXM5xx/Q+KB!_X.Ar8EUsB:oUB%-%+!*jxPvT=,-');
define('AUTH_SALT',        'f-WU^`_a_wmQo R^.&]SW<huAps|K-i_2]xE8 ;D4V8+jLk53&|FD0*n)|{pS%9Z');
define('SECURE_AUTH_SALT', '}]u#&A_rPe9yHLY!EDll.|~wxcOxB|xp@m;@kv-0zbO`1?6ii.M)fz-:F+x6:n(v');
define('LOGGED_IN_SALT',   'SQ]q&`Asv2j~O9|Qud2MK.AY]-?TQ8FlI?#K[:*Lj34`YW<b}qoU2`<.EcZs9`bi');
define('NONCE_SALT',       'rmSS{H@`!#Qs&c*a;Bc$Y6u.qUX6TEz>1bxKZGou_q[TDd<s:UTyVq=g,Q2uaH*]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
