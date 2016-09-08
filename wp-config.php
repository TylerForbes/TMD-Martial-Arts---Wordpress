<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'tmdmartialarts');

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
 define('AUTH_KEY',         ')5W3,1GQ8i^)9j^RlrG_-?+l+,2U5K-Li@og3Dzg~T-+xfgt;i!-PFB!po>+|t j');
 define('SECURE_AUTH_KEY',  'v&7sSsAb.bBFuG|XvXI2;omis_!r=.hXt=mEC4<dI:.&XJ(1,^pohGMg]c5YRq~O');
 define('LOGGED_IN_KEY',    '_f;pmV68[8W6_0a;O%>P_-5o5)dvxR%J~C2c*MH+O1C,|9iIB+ihl5D8fzQ.:rT2');
 define('NONCE_KEY',        '1cp0_@[r+VrYv;:--h<CD,+]1=R/GsmzY*e}i8f:q^92&P&]-.E<Maw #X_4T,;D');
 define('AUTH_SALT',        'F)/Kyx:-Z#o!)~T{id>cZB@o%AG?g=+Z wa5BMLx53xPmD+FS_^ys(Xek-m-SbT<');
 define('SECURE_AUTH_SALT', '>=#ivV3LaGae8Z|;`o+-F=A>*4B|k_wFOn|R;iwvB.qz4/fW0k~u%,-,DdF}*+?n');
 define('LOGGED_IN_SALT',   'IcSKDDx_3SBsOfJ+rbg!r~8Hx3qET>@,r@s~M&c`]B67FOjo3,ttE8+I,RIh+tl0');
 define('NONCE_SALT',       'M!._%Zl]HAMZU/|Oq[?e|rq4(5tKp[wLz%ZL{r=5xgIB~n@kk;ZKw/w|R6f});_:');

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
