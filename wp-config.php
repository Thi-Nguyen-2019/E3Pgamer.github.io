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
define( 'DB_NAME', 'e&p' );

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
define( 'AUTH_KEY',         '3>/*_s/JV~oD8*<rs=NK)F.}y`,x-}!|VO~r]V_u<IGa)hWr#w675<k2J9V;Rxg!' );
define( 'SECURE_AUTH_KEY',  '-Fxe<t]EqR%K78)FtQoM7`f$bdr`R `qdH[Z9*uYZlAWOAi6du%7pk@1}f7by,/&' );
define( 'LOGGED_IN_KEY',    'FMZ}XD+lf%yFM- 9:P=i[Dh%Fl4P7~i(^Y11F>-ZQw0b(L7n)Wz~#wWz9aF>G7Q<' );
define( 'NONCE_KEY',        '?9{03`9%9vcP:tM5_W`vh:womm2c(7_el3a6rP&U:Q_Xlh#P{n~3qybrL@xLAio8' );
define( 'AUTH_SALT',        'N^sA)xHH{W68UM9Kbg|tH5fe@6TlOqsJvk(OJ7_YP][YWDA>GOydRj@qMHx_O!br' );
define( 'SECURE_AUTH_SALT', '*qWtW2i61ES-[`r]y,?cL-?3e-gE9wL(TuS6O0IPs63$}~0Z<F>TMQi0*Sj)U[qr' );
define( 'LOGGED_IN_SALT',   'F.5D }Fs,r8V.V{1d.,xN}|rJWfV(>(ls1Oi%FB=8M$f&>icPItvp&o6SoZ9G(P*' );
define( 'NONCE_SALT',       'kcb!Z7)OC@~5&sQoK|3};EEGH#(1=q:A%JG.89ShWhF_Z|zFh34D*8;H>*:c*Jv[' );

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
