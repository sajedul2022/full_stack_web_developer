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
define('DB_NAME', 'wp_project1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '&z6sVEekL=uo1Vc({<EkqBpsQOVvcn|hshA%s`vfFjcEHft.wPw*5U9KOv7`e?4n');
define('SECURE_AUTH_KEY',  'd?Jkt$t@oIUWf&vNH?<q*c3T:%t]yauhPcJkznWOPlTic3hj5%sUph6u%Om{Mp35');
define('LOGGED_IN_KEY',    'D~JNR]yv&i4B=EkR/?kiFpZ|7LC-GcuB5-Bti?tG?jr@08P/Udg>*BB3o7Ebr^+K');
define('NONCE_KEY',        'H)c c%|UR`<_3eUDseq[G8!tJ.Z@F6.9r_Y5R~EoF;<P5%JF-!(9|*L*rkA NEz!');
define('AUTH_SALT',        'D/_J|,!GJ@)op6F?yj[/MW2IL<Fgu)$kEroJ7B8dTp@Oht7%+)x#17C^k|_5lc~R');
define('SECURE_AUTH_SALT', '{-1n5< *unBTlX|/S|}D-dgQ;C`Fpf9?[*%9J$nb=S4!o%)BxA-B|5$$DMTqm;Zl');
define('LOGGED_IN_SALT',   'oHm6/__ewLKKIvgE6tIs,6f/;zu3lxOo3qF`a&0o|n {9M/,=H|yHQj%?b{jZsIL');
define('NONCE_SALT',       'b1?P;>pdvXy26YaN&Rqduf=fayCTEYO<={Ux6!:Ewew@Y]j%VRM Po4oiH/Er!|b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
