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
define( 'DB_NAME', 'millenium' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'G&#!tc*pp%fPbh>+qNV+)h}<}e~^{<,1PHN+.r:qSe^#z `+v%,1{OfZ=_JtvT`f' );
define( 'SECURE_AUTH_KEY',  'Fqf*pi7NYa:>:(7q YaVw4_z6umN!UbB> 1rm]jWy y?kULMH|mXU^&HE}R^Bieq' );
define( 'LOGGED_IN_KEY',    'i/{6NdR:i6_V{~;Q;V^0afyrJ[3 R@N}mtXGJ@t=MKGA[uJjb-|X{zW1C/2ymBJ(' );
define( 'NONCE_KEY',        'LaL*D ]}4k,KhW7XNcFUFWqU:$R}E83(6t7Cm1F-#}~43MAtZ}*ACnQs29)C7OBJ' );
define( 'AUTH_SALT',        'ph}Oh<?kq]4}!;| b/59N_aE+HR]-m{[na:}xKHQYKr??=5QZNUTo0c8s$e;_CvM' );
define( 'SECURE_AUTH_SALT', 'hw&l:>_v)^]3Frj>_|g78y-gLU{9yB}eHHC&{!=?:jOgP-4dM:j]i|Ap7CIi(,N&' );
define( 'LOGGED_IN_SALT',   '9>O%#+uxCY7n+GK0p+@#yCEi)_`{v3=]vh}Gb7k33cCjf@Q[BI{.l>i!oA%b[oN4' );
define( 'NONCE_SALT',       '+$Z|(L} Tez$7#dJXQ)74wy%hn}uqV#V:>y.76+a_?^ HG1W(?R,Px2VYWjTPa^!' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
