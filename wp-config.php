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
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '#X]FB;hK-^y[js!/IPQ]Q-q%+C,0hGb0hatdq?h0!|:O?v8I,OF+(j3:5pr~Xki<');
define('SECURE_AUTH_KEY',  '!VWRXD@p1GCCBHnt&4|tep,gbP]4/T$Va_LM.!=LD{+$z=nM 4:0Vl(VSkhXm_ii');
define('LOGGED_IN_KEY',    '=Ia2uzkX$o-9D`fb2Wxh6MGtnkL)dC![&mJ]X1f:b_yW76crnzRm0C:C~dtzWk,Z');
define('NONCE_KEY',        'aA?NJ_y:LJ+07imY:nVpfN:d6<aAE]A#-o.Ii0kUc9uOyW;$OXcS~z[wN9uUd9b8');
define('AUTH_SALT',        '07xsA2dL_m%.&fMc|[%4T^_-[GkGY)sQL.4ESe=/59`Dp7&zHd3i[@4O6#+qHS&O');
define('SECURE_AUTH_SALT', 'Z3>Av{<?l^~hY8$.1f}P]boN=k=vR-&sSXNm^Rf?l@?6zL#Wqo],`?~krP |B&6 ');
define('LOGGED_IN_SALT',   'ZM7,AEs=VXX|,[C)wkbtPCpeu+VJ~9TecOG#6 6})SBw7u2pEf8$75%AUB=P~Gwo');
define('NONCE_SALT',       'jB`r8]g^/NYQYb%g=xoSo069560v(UMAgtks>bro34 s8a[M;zu7[*ZR`8HAD}]K');

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
