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
define('DB_NAME', 'lyricsitewp');

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
define('AUTH_KEY',         'x8>xu`Wej+n?bu=.T82a%}{C+XFZ*DF8(Xi!n)XO)^6/StuPzr35|vuJ>9;(=hq+');
define('SECURE_AUTH_KEY',  '#Zgc/0rFv.cwIHyNW~mw{]}h64nRTWY7R8m>4Vn-+7fNT;M;iPSVig%Bk6tf4_1q');
define('LOGGED_IN_KEY',    '(fJL#F=V}b4 %<6h1jn#5tZ2N1!(g;^(L7c|g,}7cfUL<6B+0<ya7.xx[YLP9: W');
define('NONCE_KEY',        '*}/pk>)q@yr=>IJ-HO9TI+TbwG8A~8<iJ|:*]J9NjpAqRjZDJ,M _~0D3V43R&]A');
define('AUTH_SALT',        'U~T]oAQ_Ms*d]9g?+6#ocl7<2mG8Wiw84_-;{}c53quc%ZpMv_Ayc&PfJX948CV+');
define('SECURE_AUTH_SALT', '?~c+Pepu:Cx5^#xcwE7/bT]]N0_5bswLZ/^nt27ql)M{qr4!!r}WAEz6R>`~ZF(X');
define('LOGGED_IN_SALT',   'x9%R@KRw!DSTl2AHNn14=saN2y@5s.iXuQ8O}F[owg|NFJEBvl:Cu<:%TsACDO`i');
define('NONCE_SALT',       'KS<(M/PhZP~J`<T^km/hM5;b72p&4(8U).LA%)B}nuJFM(~b~`5E~rf4#&TSMpQ(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'lr_';

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
