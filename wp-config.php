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
define('DB_NAME', 'atravinix');

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
define('AUTH_KEY',         'xL,U:gF$w#Q,Pp_9lG2j|:*Koc H2rA3,aaR.&Lm;:g5+k`,|tt ;g<WiL$u(JQ5');
define('SECURE_AUTH_KEY',  '7z[#=f r63}VrX+I<#mJc%(N@:D;Y.BByS0he5PSN+)mAF?nqakwgjHc]bnG1RJO');
define('LOGGED_IN_KEY',    'mcA=YlY^+>^Cz)N)J&2mWyZ~d@}lL7^i3JSmty7.@/=5kAmti>;v0PBPKxb}NJp ');
define('NONCE_KEY',        'tF|q(I@/7^Ii>w.9^fPZid;Uqr/$N-nN9K:3RS)Q^O, +*l>$IJ<b!E~lJ1,[Rw|');
define('AUTH_SALT',        'Uq53kj#wQJ@8Mn BEp#)d|Y,Ja<2J*~2b,,$U,){aP-qujx>`|Cl`5GoU}},Gz68');
define('SECURE_AUTH_SALT', '87`zXfCb.,,@+Z](M6ylwBcg( ?AdIVr5|6mofsT]]*Ql_N@64 BZfV1oc),pg){');
define('LOGGED_IN_SALT',   'Eyvel94DQVJRL6<SlG$DL8QT3`m^?w#.zQ}{|C8,v3:rL^I8UD9A)6(i7:W +Yt]');
define('NONCE_SALT',       '++eZb-7PB8?@oxIE5IW|#+RHJ98/- /NuNVsR]|#JvX8B )jMRjy;sw;mS~4T0JQ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'atravinix_';

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
