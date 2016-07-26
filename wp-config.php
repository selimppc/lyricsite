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
define('DB_NAME', 'lyricsite');

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
define('AUTH_KEY',         'QaABl:xGAmxH>x mN.g9/Fa!v4Qdg[y*xl8,DR2r8[y=d]_G=TD]=PZ4NL!V!DvF');
define('SECURE_AUTH_KEY',  '5^{UGq#He^.;E72 D<r]f|`yc}cqB7DQW1L9n^=/Un%c[CPeWymOh/&8*[ f~{C_');
define('LOGGED_IN_KEY',    'Q|4+!{+ vwRyc[O=m$cePtd~,GG?6#F#r{0vp!&$}d{GN f|B934X/8#P>;(,$U{');
define('NONCE_KEY',        '6=x!Jn6<5*`xp1x@C*c5J!;oe a:bR@AetqFprbv AahenRBJ%_5?@pPhIBMPOQy');
define('AUTH_SALT',        'c3t:pXlSk-)-QLPB)Pt<%+ThVcnI:%wSZaE@x6=lS@EFG]YY5$in/nyrHYTMH+aD');
define('SECURE_AUTH_SALT', 'T |yyD;}V/*Fs~vV+Q=51q]vR?+R{MZs8Uq&y8G0JWg@RHUzuw)gM&kWc]Ee:?[N');
define('LOGGED_IN_SALT',   'P-?_;lG2cC1k%d?W^aL8$WFn 7X]y1mrcmQQ&&q?7ARko=Y&+TUy[71lPv8q*+kB');
define('NONCE_SALT',       'sj]Ix5d|j`8xw!y3WCWU*%HCsuk#SJF{0|lb4g)y)7gL~ef{FfM`Gf,n4HHE8nkd');

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
