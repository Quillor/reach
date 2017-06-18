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
define('AUTH_KEY',         '?>2v+a9?PwS;G_:S%yLP+g>]Y4g;#H2`.Uf_l${WcpFf;g.MYHJEq|^m?+R>t_ 7');
define('SECURE_AUTH_KEY',  'lp+QJ!#LfryPRm;- ]x]fHPsE_^ae4Nhl7Q35C;vJ0u~yk:Kkr?&+A~d/jGL;op1');
define('LOGGED_IN_KEY',    '?38m43h!*]#Eb~P0YVA9Q{%Z9MoUm);561&{!#<d5$a27OSlF;64px8(1a5,95Wi');
define('NONCE_KEY',        'cyO5ZVapzV~4LgD+/(tX-cTKk<GAlo4dlnwqdD= VObl<hchudTN];Ra?F#$}gX|');
define('AUTH_SALT',        '*ZIf`7g3vmYD}K?&4me_5H-KKh*2PM|Z`&WR)4@yi@>h~M9d 0{V1i$~EK*wWD(-');
define('SECURE_AUTH_SALT', 'c>5dT{}5rmgX66#:7Mcxbm7RrxC<g/5jp2%gDf04QJd&:=vrgIu#),S)s|w1^[EI');
define('LOGGED_IN_SALT',   '97Cm eQZ2]$#K}8H%0+},V.e@hH{N2c/q]B^&_6e8?GOR1?P:*>:k ^[*=-mRdF`');
define('NONCE_SALT',       '_i7fNkx* 4lXtP1Sl X=bOcesVYKqy;Px`4.(`N+h*qsAdiQ~wBt}FsSrRbf_~G|');

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
