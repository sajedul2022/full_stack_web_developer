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
define( 'DB_NAME', 'wp_project6' );

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
define( 'AUTH_KEY',         'g{B0x1 _UA`]zLWx<6$*!!PcN1E1)gRHzAHJ&]} SO=;C3>Z5H+@?C!.@G~b|%Mz' );
define( 'SECURE_AUTH_KEY',  'R$Ab&r=<^E-=|y}R&HFbdrus]j+i)K`1}kXkH0m$mhsyYNtk*oey)L#& w>Ahpcd' );
define( 'LOGGED_IN_KEY',    'bK^&gm ]ogjLQp*Jw/!/{6b9>1<0l^gu*}GDd;]>Ekfo?$Q*0%pDnVsrsJYmJW<R' );
define( 'NONCE_KEY',        '?!My^sV{G;<79yH.gLl@4lSD|v@_r+R**EpX(&GA+QN#pwA1Ju0G=&Dn|dr+r&k|' );
define( 'AUTH_SALT',        '-a6x|IUVPPMtbnW~Su<zAG%V.Q0y|Ez&Hi_U.oT.8A@op#^Bz(N#OKK()Wx7EtLh' );
define( 'SECURE_AUTH_SALT', 'vP9&^4J2.T8%^R,*sJuN;%T_WjRZ@fnRjZK2Ga[gCYtjG[,9e-TT/7snJgY1j/%8' );
define( 'LOGGED_IN_SALT',   'aOy<b/k:V!Z;KX:J$uzSHJX$uk1J.xcRQ=d>q2?QL*_kgp4M7xiN2=FQ3_$++/T=' );
define( 'NONCE_SALT',       '/5boS$y]YEOhiRZk~J2~Z>y+:8XmgnPV<3$y4rI9EI+8Tk2FGk7dCR4@&T>)0i2G' );

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
