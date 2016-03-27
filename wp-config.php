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
define('DB_NAME', 'taylorkarpeles');

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
define('AUTH_KEY',         'H/eCD|-f}k 2n;^{Nd%}d3TMf%;)(<^,0HkP}(@+ =l}-4xy*4^g:$]:K~=L,&Az');
define('SECURE_AUTH_KEY',  'l0IXs-k-&cN{c1-K8CYZc|{@$|&?ed8AIWq;,:5Jo-`j+w|8&~/EedLO2?q^CP37');
define('LOGGED_IN_KEY',    'p*fm{>,t6W}_]B-lWZ:~-dBY-_q|%Vw>IywNabb6MAA}= Q`Npp Isua(L%z;Zs-');
define('NONCE_KEY',        '+lnfgOdDa31CljY+iCh`f@IRz}#b-Kta%EnBZ|q|l5#`7x7K&zhlml+4LK%}w6Yb');
define('AUTH_SALT',        'ul}o?oU{ I}aPa2w|PQe_T~x|U>NFp4|!>]8wp+v5<&w}HKvgMy--_8)y,Hj!sg}');
define('SECURE_AUTH_SALT', 'h#MK_OEdRng`}#.4#CXK$6o{ETm8BXoC7qCNKNBUQ9{`[lI!jV+?<{+e[?]=8G-R');
define('LOGGED_IN_SALT',   '*2P7m4PY < G|79rsDzd.s+$CJnN1x#H1+*];xwy,n.ZZ4h-&]^<<#L|+<kT7xSK');
define('NONCE_SALT',       'GLxH,X6i Wdr})>1uA,F_w#N6LL_G$7eh.agL=,ByxN/{uLZQ&5aQEx3{%;^r>CC');

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
