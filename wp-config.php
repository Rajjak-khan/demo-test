<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo_rajjak' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'z2u<NtIbL{y[1{P|!<%=j+qg,}2$R?dTFHm4Nv[bK!I<x^aSuELJU7g~{;K!b*[J' );
define( 'SECURE_AUTH_KEY',  ',::q [6fTJQ.X /Tcnb_6;K:bG q0Ip.svi Xs<`ZuTV.nl2i{E=~!*z|CF B0!%' );
define( 'LOGGED_IN_KEY',    'v}u(7g=bsR l-X/e(#_wc/`,+jY99EX9_+,+3>cXgH8gJlj,>-@x,BwW&WXfJGZM' );
define( 'NONCE_KEY',        'e0X^S>r :4$kA8a;0^Fg/!OPTMFX8=uOK@XjD!{2Ol|0T|0 ;$DR&rz0fE=/5AuY' );
define( 'AUTH_SALT',        '!#`_9-T^6r9}a*G#I4VmhR H q7RPY9iV[ji[[J@_w{@@ye.ZE4|GL,wy8$2QE(_' );
define( 'SECURE_AUTH_SALT', 'oA9a)8K_LeVg )~q55>xxk&q:p+E_fjan_$)/g-y6vN)0h,c*{X<+&5P)$Z[:jUj' );
define( 'LOGGED_IN_SALT',   'C9k8kXJJ?zrT{8|O-}]y703w#^WJ~nxDO1<}]!wV@<*i{+|?V98xqx}f%dUsYE6!' );
define( 'NONCE_SALT',       '1GP~J.uLmQv!#b)W1b};XWrTOjAa#H6{I-7#u*<[ggUj%*W|&nH@EMFQFrT{,b 1' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
