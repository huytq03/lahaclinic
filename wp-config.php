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
define('DB_NAME', 'laha');

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
define('AUTH_KEY',         'nDQv1ItN]_.t]3biIU#82{..qg}wRez&,8)~}L;7JVK4U{$cPnJQ~qU6{oJEayua');
define('SECURE_AUTH_KEY',  'kskVvFW$5jM;:lVNLS}hPU*<ETe4bck-l&c]V2~kv)4SM4_XKnoLfgr@j4$Bwr-J');
define('LOGGED_IN_KEY',    '*EFSV1k3w3;x#)44_n}W(+[(u^/wvp!q$/v@W0_T53O7`l`tf2<*[,>zORYAo)]/');
define('NONCE_KEY',        'K**QZw:x1x64cE5xc/!o(FS2}xJz4(pPlX_.nEvR*K*`IzzVMl6sCss+N5~y7rV5');
define('AUTH_SALT',        'z,N4rALG3hh#x6p6!)JyV}Mas=b=a>|eYN4BofrPfSu;A1^l;ys%tgwPRHgizX2r');
define('SECURE_AUTH_SALT', 'duh}7-`%_AHzV{vZq8>j]Uq^|#2+PHA`d`y7}Sv1<3=/(WRqt<u},,hV3f4zk{]N');
define('LOGGED_IN_SALT',   'Hj]kynxU.EXYb{Nh8.x&`<f)&I/_Ca= 4UxA[8jY2~Y:DzU-|e]GW5iN.8y4D^h>');
define('NONCE_SALT',       '~1;L&Yz</]ZZ:Vq:ccm5Q1#3DM@<L:rn,b$y3I/-Rsjc/?#;+Z.#u~{l [m.a:bH');

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
