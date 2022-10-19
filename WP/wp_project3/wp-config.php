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
define( 'DB_NAME', 'wp_project3' );

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
define( 'AUTH_KEY',         '9u^$?Z[I2cxJr67XDSb_DB]6aAmP)cnC1<7PhmJD=L/}AER{z/B/zP^jO<FLo;z4' );
define( 'SECURE_AUTH_KEY',  'QEG9[#Cw)^b|,AqXWXoh}m2/e.{9C~9mXz0u)8v0`T:*pb6l8&Kcxy{DX*FH:Ybi' );
define( 'LOGGED_IN_KEY',    ']T8F63L;G=@;0x:tMh?.)[X=0C`1gzAz]r6uj8;-7re:C|CV2hmUG&6HJ+}+SZaj' );
define( 'NONCE_KEY',        '~e,rprBU:u3?>@kP<q_9HG@f)SSc}OEqY@ihq!ah>E_bS]]Iq&=4 BBt0s:q=JoA' );
define( 'AUTH_SALT',        'M8DLP3lllpq2|kJ8-;==(n7>)TG$X#4*>/$W6_Ag/^I]}Tv%l.Qg5nh_gN&*C_.j' );
define( 'SECURE_AUTH_SALT', '+JSH)sxvD)2p&-P09kVyw{Ww>~]uW#aSPO^92w%s!Zxp LR2_wNAs7Z![Jwh7e&1' );
define( 'LOGGED_IN_SALT',   '3BI@QxVx@0#-rKswtwB(;|yx`v3x2cNJ>sHh7qD*x7L1LZ&L+Z=gh,JNCCSO63mo' );
define( 'NONCE_SALT',       '5O]g*-7lN|jss@Tp4VP&N?GkJU3,xVGgX_(iB(}M?u1y_3`ZR:DcsZEH>C5c*CwA' );

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


define('WP_CONTENT_DIR',
 $_SERVER['DOCUMENT_ROOT'].'\wdpf-51\me\full_stack_web_developer\WP\wp-content');

 define('WP_CONTENT_URL',
 'http://localhost/wdpf-51/me/full_stack_web_developer/WP/wp-content');

 define('WP_PLUGIN_DIR',
 $_SERVER['DOCUMENT_ROOT']. '\wdpf-51\me\full_stack_web_developer\WP\wp-content\plugins');

 define( 'WP_PLUGIN_URL',
 'http://localhost/wdpf-51/me/full_stack_web_developer/WP/wp-content/plugins');
 

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


