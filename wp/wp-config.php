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
define( 'DB_NAME', 'profile' );

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
define( 'AUTH_KEY',         'o^:fU -Wx&FBU>tt2CH3ZyA1HF;~d9{isusGXR|,}6y_95o=wnTgAR]s6:im3j!z' );
define( 'SECURE_AUTH_KEY',  'p.]x#61Vo^2&U:V:rWge|5y1~TEY$w/Dr/i7br[Wb~3l_bwjoJv_SR31LPQgQKml' );
define( 'LOGGED_IN_KEY',    'BaCY<2*G&q-WSZzq1M~R6LM*O=}||m$]!?_D1$>nv`!bPWw?B*`F%ADqn@IB1*,S' );
define( 'NONCE_KEY',        'Xzwch-&y+SHl-%sg:yaWn:CyOC)aN5V6Jh2@|_J+!mW2uX*R3j+hutgwzK$!oEuH' );
define( 'AUTH_SALT',        '79<T3_kGG83e:;(c8&_LZ5?@HRy~21TBa(pvJ%(#zzv7DV3QNd&lM[*-svc5e80a' );
define( 'SECURE_AUTH_SALT', 'C@9k#GQ&>1+d%=J2 gx<t44G_uuu3u;{7rmn?_[W@r#vzXQ6;X/h@Q`<c(p]j*Oc' );
define( 'LOGGED_IN_SALT',   'X`kiR*zh2iE# <=Zk?9S1dU>ZT$9/QR>[q=Oxj0kT2(#C&wv0eN1j[^qz Ui%nZj' );
define( 'NONCE_SALT',       'lL4iC(?a64b sJJHFs2I=,OM^/k<:_|g(}RpC78t VKqQUr};gKXwXG%l#yt.0_J' );

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
