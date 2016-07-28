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
define('DB_PASSWORD', 'root1234');

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
define('AUTH_KEY',         'Y0-Z:kzZ?Nq%0;CQd,W}tGm$R[9a/K>yrj^0`lHhiu+R_RoH3Je;x1s-cbDorAIV');
define('SECURE_AUTH_KEY',  '`Zi)HH&j=U<1^}w4FlH8i}gy!uWqe,A_5{JI`N#Pe=lm6$0!j;xgp;S9Q$nDeHt1');
define('LOGGED_IN_KEY',    '#v%`(HPRRQsH)4DN_FELb*~a9Cy,(#K](i(G)p~Xk c,c>><NSWaqjRsY{N^Od=u');
define('NONCE_KEY',        'NOn*KJ?2A$dG0Jp@:n}@Y^].xu8/QIx9zaq7s~Cz<b[/r2*s*K08+w3y.-?>P$?,');
define('AUTH_SALT',        '%!<* sNEHH(_WEN|95VA.Z}Lfb=hxxLM=lm-Ps~yW/RPQ0?YB$|t6iLpF;b#0O6L');
define('SECURE_AUTH_SALT', '&Qm^m>3MT&r>l6gtv*]&gw&A;V/R|Qj|-u51Q?W4R!a_/T)97B;s?@tL!nS9jTs,');
define('LOGGED_IN_SALT',   'o{-_>d>e,0^?#+~~I|,c@l4`Qrzr/G,g]c?_)Oeui=VA(^Lp8(* 0Gf=pUx+]3BL');
define('NONCE_SALT',       'Y=PTr}ODMvOcU%-!{/4TA,vuIov:c{1V%,E|9(ndZ=E`-S/>c_l,KH9J]{K`oQ>c');

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

