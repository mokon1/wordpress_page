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
define('DB_NAME', 'wordpress_page');

/** MySQL database username */
define('DB_USER', 'wordpress_page');

/** MySQL database password */
define('DB_PASSWORD', 'oteJqBXM234');

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
define('AUTH_KEY',         'eXv!:?@!^ rGwKX;V%0C*^1p*s3+<Rhkf1p|7+x`?h=O?p@v^/^#-x*$7>ci09Cq');
define('SECURE_AUTH_KEY',  '~Hs_XuM<!)UdQc,}*)`vAx47-%pu~?,RWJ~Q~Iw8`,kMF#OZI||tBp8DHtK:=xM2');
define('LOGGED_IN_KEY',    'a~wqgVud5.>$XD!#I2g5@BzT]] e>(0`GM<Y3HPEf{vT$!W6CXCs3@1RdR^+!EGw');
define('NONCE_KEY',        'k0|`yM_A`aL)4~=;&lZ2Td?C)=7ol/mrWNCb[fcQre@-q2n9j$|;jZ0IVj7 &kK[');
define('AUTH_SALT',        'eIQEy?FJ-cmLK9X7RZieCL-{$5bYEsPLk/%&oM9o,X{07i!VC_4uCi*#:oFsW)Tu');
define('SECURE_AUTH_SALT', 'q G-cD<Z:%Eel}DX_5Z=XYOu`1_7gu-G3j94+c9^M|1PuZv@5Hc5.yK3gZDGLkU`');
define('LOGGED_IN_SALT',   ':*!l6Jj^K<Q#!zQtHma1q*SH&HWpkNq6|vO]~&o1]!byFZM@vJUp$RY~m0?+ @sZ');
define('NONCE_SALT',       '8}H^CKLYa//*TWWdV=ZX.xKW/:KhQ&M6N#8BD?u&Y1IKET}va7V+y.TXn@3wpNQ(');

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
