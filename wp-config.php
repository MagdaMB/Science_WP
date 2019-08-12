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
define( 'DB_NAME', 'science' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ':7h4IG7Q?wSJkx?uIYs cOr%mw4=_`4+{9i?^q^u}U d;83$)ZG^P<pg9J&iZ<It' );
define( 'SECURE_AUTH_KEY',  '1JIi)xijY0F9I72O6ywfVm+IY9~rdu5&<V!tNky&!6b]UiUiP#d5<bk k>C`?v H' );
define( 'LOGGED_IN_KEY',    'YSD<H4F_:a%cLWLN-s+~b~z(MP!xMArpR_u6Ic<ht<?DFV^NQ++-Qf>ChKB7QZAd' );
define( 'NONCE_KEY',        'ILF`eIES1[z-Yx+Pd;l`{KC<ubfq+H&g4Tzy^BsW0Epe.c!*OR>97<f5_R?>a8 J' );
define( 'AUTH_SALT',        '}o8+3m/>DnvkGBL]b.@FuJ jspS.>R6D[dsSG,w%/I3^M>m%_?d!)Vm)V?Q,4YE^' );
define( 'SECURE_AUTH_SALT', ';T LE;*8G-Ls^Xrs~T$LEya4|]&`Mj/N`iY;UbMtsN=`XrC^1f42Q8+6=H$AOA<]' );
define( 'LOGGED_IN_SALT',   'T=we$XouN<K(q8x?]@LsdyGV Wl^pQ{2AJp+Hy3oZ^lS/IaVB%~M_YRu,C18.?hj' );
define( 'NONCE_SALT',       'ke^B1QQ!2AA|)6T;u.T@v[R<Lw0N Ud(cDx]5mXXz#Q L#m!z6*AVtrN=%WUNMjY' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hsi85_';

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
define( 'FS_METHOD', 'direct' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

