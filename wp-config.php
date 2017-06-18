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
define('DB_NAME', 'reach');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'tAMH@}r2]<ids^= G@v+v=wJkc{wcFnBQ^DiI$mXZq>pi5MjX+w2{5<9,I Y)nSi');
define('SECURE_AUTH_KEY',  '6rCQbZb?dx <Fx.TZ/v:c:HaG?6Ho,v?~3PpC5+ l).,l^6<xyX)LMnGpeu-)bBK');
define('LOGGED_IN_KEY',    'Hy(hRYJ,f%F<Q>b5}M$WQ91:IV/m9V=W+@I-h&)k-EabX,?A*sfP+  [CCK@C aS');
define('NONCE_KEY',        '*!`[{I/5%~TYBqb`nhU 0/%RytcPu(f.1*irP}y|kIm[$Ye>t*|CbXpm|;C$q?j.');
define('AUTH_SALT',        'ma6DaaUk@q?5Y.QQjw}h|2&OzH4g*lh_|zOQ@Bj}(;iz,,@rN[t-=CnOG3^ tYJN');
define('SECURE_AUTH_SALT', 'o?(/}MS#$6QL@8PJ$6>BC}g=OKa)aVldv]!Is+/dYymKx/Hu|YBKEA(/?OT^uQ+d');
define('LOGGED_IN_SALT',   'M&6W4c5$;~7e(Nf[K{zAg(KcxgZ!{i M_ ;#wYvL_0MZ<}igj*/hHD}HM&m5(?#C');
define('NONCE_SALT',       'KR>TBMZ_+|h)[b!Dv9od$p3FyV9Lx:0N:6-tNtOR0NfI_ZGt%v,GGu^)H94(90l}');

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
