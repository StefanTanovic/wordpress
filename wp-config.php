<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'rooster');

/** MySQL database password */
define('DB_PASSWORD', 'adZf7HVRm2VAREPs');

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
define('AUTH_KEY',         ':Y]LBQ@p$S-LsSuVE5;aEVd9[kt,A$<Zu*4_ogG9+=h!TJP$0$SgK[zoC%Eb%Ce ');
define('SECURE_AUTH_KEY',  '{?>>h`>A!c#[u%!Su[S)aw^K%K:w]j+&Th:ocgF<-bzN. z`&wUC,_D(]ouvftJB');
define('LOGGED_IN_KEY',    '~%O84T&qZX R,)!@D*!xR8.>yIiCra!hei*37 (/3^@{x9a*~82Ow;F*0Zj>F,up');
define('NONCE_KEY',        'G(!x-xGHRoi hIqSZ2P29km[r$2C1qZi|rH.`lsaCVMUn-/s:9iHp? VUnk~_,l%');
define('AUTH_SALT',        'aXg81fNwR)6_t5qtB)mV#*))c&^<AvHl]SuHG-IPx9Gqh-=@q.[^Ty4*nt+iCyrw');
define('SECURE_AUTH_SALT', '_t=O:of~5)b&+MD7(6S:.8Tv,zGS9JfbS9c~g%G21+5L,Rhj0+LXdL~)g;tR57x9');
define('LOGGED_IN_SALT',   '`,8muwGIm2iP*Ry>A+)*@UVsd%fxkb,FP%jN7j+l}1]xj{&c hFFT*zDv*(5iH_g');
define('NONCE_SALT',       'W$r5L b_9FYG3)9d<#4.><b]QY?#~qFDbGW[tBb@!>g;s96L @Qz;~ #pHu=}N{h');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
