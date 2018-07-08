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
define('DB_NAME', 'bardor_db');

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
define('AUTH_KEY',         'r>k89E.!Z5CC~.`aj$1hej4 gh27er6vwW4JtHXkT87D,9+D7v2UhcWeGG&J zU@');
define('SECURE_AUTH_KEY',  '0ydApP+q#_5SE81CUwoLyV@ay?<Nv:[}q6S4^7k0Ufb0L_P5:W[ovHB,Gwd!u{#K');
define('LOGGED_IN_KEY',    '?FA[W@1n_BLIRb#rcHr,cFp[,.I]@wrDG9oR5^hEk=>=(tq Ia9#(<bpLX{.iPSD');
define('NONCE_KEY',        'i3GaqL9}eqva<kHb{8*0tb%:a2d}lBB=cR4fb|zl^5)v-/8#axE).j2rM|P0HV`t');
define('AUTH_SALT',        '4NAa3h+Mf};&L~81*Pgf@K?P~lR8& BRpbO$*)0t{GZSws=*S1Wyj`/zHU&]_* 4');
define('SECURE_AUTH_SALT', '-l}oCme8k<O6Tm`%eVB4I),NOowGH*?#Sq79hG=WR<fA3<U3YVXO]t(=%c#9*6=}');
define('LOGGED_IN_SALT',   'L8L1;] }3ikTN#Ml)?Z8PICmQrubS0q^[J5j6MZ2,~e(^],Ei=%a_.-)]ZK$ujNC');
define('NONCE_SALT',       '+2m,7%7!G{3j28M^hPL~D.q;o/myNfm9a[PTRltar 5Hi9i0v[foIXfGNL6Gdp#<');

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
