<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_project7' );

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
define( 'AUTH_KEY',         '5c5{_+/@54a!k>a5XKNjhVZhYT}z{+tn @E^etvq)y;{C]s$Z4ZS;6TXC5-,1pvH' );
define( 'SECURE_AUTH_KEY',  '^wG9V3*b5dI~ R@m7@)yg);y6+rMCd[G r@&wJ/gy(Kt8G+yXI?*m1{<<)U5HSRb' );
define( 'LOGGED_IN_KEY',    'p=tUA+f-2!/Y4o)^H_8DO<^gLpdL3E2h(=nKb698vrWRfO@g?N?j+@YhC/+CV+=k' );
define( 'NONCE_KEY',        'f}bVMCoLGPKp~wV4-tc?Onn1NehAV>P hNm<W~MU3Hv*j5Ju]s/]0.y8r|`j:@X^' );
define( 'AUTH_SALT',        '^~]kPU#A$kx)CD@_}qn(.nf51<+GQw=j( Ov&[7|Dd1GKk#^rTbkHC~8FObk26WI' );
define( 'SECURE_AUTH_SALT', 'v)Zy&NrdGa Y{2#ihK[s+dIw,^aJ=|Wttp8k:@PB;d}XR-2tlW3/_ GC233V(lW3' );
define( 'LOGGED_IN_SALT',   '/x5E0# LU?PvZ(`;&;n&zg/UnZ0RWh%-g#k~@-q(|g(j/*yftIlVacy/o )vL4zY' );
define( 'NONCE_SALT',       '-Q*ujOqI]cez f FP,Nue/R+DLPv9#r%xX=n&N{+gp`C>/XSn<0*0eP,dhG.^XN3' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
