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
define('DB_NAME', 'boilerplate_v2');

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
define('AUTH_KEY',         'qUCR:9L(bCS@2,+H0)Ka-e`De2R5~y|om~!;;jL@,{9q4[SO%~h0Hi/oAn9Axq*{');
define('SECURE_AUTH_KEY',  '-G$SQ~W :iXC|tY(<Mibg[5a n+c{mpM25UaYWS[*tiK@bs9Ha&0Tbc!C>BIWfjd');
define('LOGGED_IN_KEY',    'dQU0]V o?<1CNpM@GuvvFQtA<Az|P=%I{*-:=l=(XJi~Ci>;0?B>y q9Tnih_822');
define('NONCE_KEY',        'MDo@}wfB7n)-tPfe_UxC<vjk09(xeT|a tHHxdnO0vs=jdkg>=HemBjVe]{mQOwE');
define('AUTH_SALT',        'HIvt9?3XL6.P..Ga.@jXh,7^xoxvc }{lIBkoWw9xH0PX0q@x.,6 /pu{/CzGTv.');
define('SECURE_AUTH_SALT', 'b2V=E)-wcFx0)|(:~j2T;B6@?jF<7!XXs%qOk/X_E[8tt,=:)Y*+fKW Mg>>#u-3');
define('LOGGED_IN_SALT',   'H@^~aZ[&kDGGk@>?Qk;O?ypqVh(?f0tkCVcy^v8</|-Gz2LzaXWc0C,g7czmV9L&');
define('NONCE_SALT',       'csa:Lw}WlX-)*(mU#OO_`sX|rji>:s_EsALLdrE^ u/P{q9Qo!F>6wIf?aTY&ZS#');

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
