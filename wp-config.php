<?php
define('WP_CACHE', true); // WP-Optimize Cache
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
define( 'DB_NAME', "jma2020_lc_dev" );
/** MySQL database username */
define( 'DB_USER', "jma2020_dev" );
/** MySQL database password */
define( 'DB_PASSWORD', "@v0sOa5JB_~H" );
/** MySQL hostname */
define( 'DB_HOST', "localhost" );
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
define( 'AUTH_KEY',         'UC=ru32>(m*-b)9Q j|1a+IUuz]lk}{IA~h17dEKAq FoF1Uby9!RyV7L@2ctWS^' );
define( 'SECURE_AUTH_KEY',  '${><j?.76`By}.+f&;C)a!.B{2L$-,xJ_cthiv-KYbK[8]PC0nS*b=Y+U_DiA>*u' );
define( 'LOGGED_IN_KEY',    'U[4ar#i2jn8-N0seT(SM4pWdK n[16q<nYiW#xkcA2L.xIU0zeY!u(F+u&kn]g$x' );
define( 'NONCE_KEY',        '9ZN!}IM5$MgQs@m`_RhM52``Im>xH~(AJn2(c.`VOeWT-W*+_v6Ev,D!G_XOo+gB' );
define( 'AUTH_SALT',        'VFxb!-Ir1CT8#r:6fbzt<x^>e=&kVE6TV=`||?cWTPmc({<+&>TUP.f898=@lX7c' );
define( 'SECURE_AUTH_SALT', 'tl<^RF..ip80<2VKjKta3AYva.y,NJw&;FBtS3y.:gobq|MTC|;C*zR$RQ,5J+zF' );
define( 'LOGGED_IN_SALT',   'hWoNWOZg[z|(:](pUXI@i*#Za5W1LQPt;o6!w.Xy=B8fJbB+sn2saxCIF+9p>4(O' );
define( 'NONCE_SALT',       '*VWyM]$hpC0E?a{jr[e[=7!]s8.z^7t.BM3vzN$GfUoED3}23@}]Q4-$wjW~Og+;' );
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