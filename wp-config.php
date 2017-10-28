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
define('DB_NAME', 'boilerplate');

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
define('AUTH_KEY',         'l}Uh@)@AIy[ko|Z}+>+vue%`vBkC8yw(j;M-N1v(m>xr,1INo _s mJ6.6CW7&Rb');
define('SECURE_AUTH_KEY',  '%;X/vF%ffB=[,8y|jY@Usm1EZa.+[VRg;t&$X.B;lB%+h]7<r$n!gws!D/1`znat');
define('LOGGED_IN_KEY',    'sL4Ag90A%v]T3H(IP.P>vEPPVZ{.Z ix8pT {cbgr(Mf9{2EgaKJ7}zf*b+b5/Xr');
define('NONCE_KEY',        '2XX^_J`I/o3GUE_fh>5=s(kdoq_Hk8g(*i_7w+V05v?(lZqLm(}rVPU&D3Xm8eiY');
define('AUTH_SALT',        '~8*xB(`!Z;?4i3;Yl?=Mbw>u_hP7;Q$r:Eptg#FW:L:5^7Y)`=q|Aa?%)S IV}E*');
define('SECURE_AUTH_SALT', 'IX@%z`4f=qUhM%;nCP@,Vg.54*$+_]mm66uah^$@0^`7!z@f`$)z/5lW6;_96Ipv');
define('LOGGED_IN_SALT',   '=fcm~o9%*v9+-A,Ar[#]y.&Pvh?)X};,SW%]u}R}I/b<*U.v3g+H9:p5]LQ>KSI|');
define('NONCE_SALT',       'V)H9`;wNwhFasL;}s/k48f-{}Z9vyB]35=MRpk%f_IsrTqn__D5_InXM+.$SSS#b');

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
