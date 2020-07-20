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
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY', '&q7A`OYarz=tr6;Ca>p->lijp(mFRYSm0W1 N%dD}}uSy?rtLx)Iwv:h0nqg{B&<');
define('SECURE_AUTH_KEY', 'eY{J]}2>aWk8]2#QkE-<J,}_e1n_?AHb|l`c7ei56ERQ!s+:q{Xu^=.#VA>|m|p!');
define('LOGGED_IN_KEY', '}X!3?@j=6x%~I,`ekHv/9PjPN<$6whXBZYRYD}`P~-<RE%t|F=AtN~G00:+ O-%&');
define('NONCE_KEY', 'm+y7CS&s6QQxB#Hl?|*wJ(w^G(j^_L8[&T5|)s1m^kc(dz)>HL3p&~n-Q&+ipb<%');
define('AUTH_SALT', 'w.z)gIAi--wInU&pwY]uL.eCDXT1G2$pR4~!< t#`B[0tc3jDQdikR$CP#oGcuTg');
define('SECURE_AUTH_SALT', 'piKr.^n-uPaT28E7$`->+tdt-|L Q|Mt$CYXfh(BG+,yaZ-*.e-^f(/G+Td,sNdc');
define('LOGGED_IN_SALT', 'IH0@u4ITm>-[*~+E/Ch<reg$7S$4YNpfNZ)l ?%`>Zx@NP`,[x`rh&1]Xelh6iAo');
define('NONCE_SALT', '6=0L(,r&P*{^J-{VqS5K/2)_<t>$i}vZ~{:/xtPtp#a9bK;te6!Mao-<{zuqtaoS');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
