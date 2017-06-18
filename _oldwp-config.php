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
define('AUTH_KEY',         '@df}D,6Q}i[ -ckz)<2Cr;t<6:7T.m16.,W6E~hRdehy%B,pzWN4fHc`RGo$;qa<');
define('SECURE_AUTH_KEY',  'f HKo.ULL[MZ/nofc~3^nU-.^_F{S@bdKq, |mv`+t.j#DEmFWWMjf:%4MfFUK#:');
define('LOGGED_IN_KEY',    'li=u7WBK`xtOI$#fxp/a(~{UcE8RBMk~*.F|a?C@~`f/Mk3[R4yirM~`c<j7p>;2');
define('NONCE_KEY',        'cP4,)i[I6=N{:v5UjRf{8ryU/*4HvsRMyU#cH5^q)cSBda}XY!U->N(HGAun_|.w');
define('AUTH_SALT',        '$vkdGt*sn;57CrfH:/AV.viz@xmi5MNXR$q$,(#g a`,h|d:hGEvn09qwcf79%no');
define('SECURE_AUTH_SALT', 'lZY*u28}sQuYX7TjrWH@)[SMa}1jHlRWb@9CHW37<|)?~)1%$ZXN4MLwb_ePL$bW');
define('LOGGED_IN_SALT',   'aXV_Qfg6#@8 KI8OR6#h9X}8&K&T!H^:ILY $q5G:<xuF?VEii^){:y%.X:+Z`uD');
define('NONCE_SALT',       '6$t)-#0M*^7L()K6efq@xkbSH.R[z93j6xxDK4oIL*)f[hiQ4}~g*=O+E!.OhD}|');

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
