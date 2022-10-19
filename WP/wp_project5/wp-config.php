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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'E:\xampp\htdocs\wdpf-51\me\full_stack_web_developer\WP\wp_project5\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'wp_project5' );

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
define( 'AUTH_KEY',         ']*<<X#/C07gVL.NaoElQWU n4#ldN89qt}ry1&o{9Ifo&U0wO3I5Vod*{uuP:R}7' );
define( 'SECURE_AUTH_KEY',  '5(U&</S&F ND;i*+8ww V{#Z~I~_17Q=+f?Ve7hm+jn[a{yQ!]eL%}{#HBTmk#3*' );
define( 'LOGGED_IN_KEY',    ' (;^]/fM%r`p#3?aj>)+c0eGI/y%J5 $6P<TTfLHh#sf[}E3r #_ (Q$WtZQgVyg' );
define( 'NONCE_KEY',        '{&{C]a#d8DSlN,rv>`v+GIr8#&@!}0#Oe!Y6<0=JEsm!TS%z3)h{18YSq=@Br7Q&' );
define( 'AUTH_SALT',        '45}8%+.|jx4Ecg8`r(Xl/1{NN8%LbIp&tRMZ4~cy}>]_|tBoAI*c}NIa%L58W6W*' );
define( 'SECURE_AUTH_SALT', 'Yk{F`Nis5by F1;P/{UYn.8eDyKPsSJE|r[Hx@@;cB-p<|]POA=!+,.z#]~-A{d6' );
define( 'LOGGED_IN_SALT',   'rS.^N;N4=e~Ak5vW;VNryJcLNQ:jb;RJ(Y#J)=g_+WJ)jrX-,Y>Xl,e+[.wSu}# ' );
define( 'NONCE_SALT',       '1v_0@XPaVs(}hXT?W}q1K1q1-g0cX6fz*p(*3o.,H9>^QzuHaks97M-EqN}?`xwm' );

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
