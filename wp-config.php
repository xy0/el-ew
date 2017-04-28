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
define('DB_NAME', 'fyn_ewwp');

/** MySQL database username */
define('DB_USER', 'fyn_ewwpu');

/** MySQL database password */
define('DB_PASSWORD', 'h0Qili');

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
define('AUTH_KEY',         ':v3Hjo<2pg6U{?5A%Vx m4l3N`Aon4nKP7-Lp5kw-KZf86MMuco5.GP7Pw)]etEZ');
define('SECURE_AUTH_KEY',  'K78Rj)YFL;|Gnry}14`2yfpql#[x9(8Am73v>[EG2TDMfY0FniB]oY<MW{SQ{UkV');
define('LOGGED_IN_KEY',    ')R>7FsCL{y6l?s<|a{B(FrZdN*XH/qESKGyE0pw+HsE*J>DG`m6Woyyiz QIg0fs');
define('NONCE_KEY',        '+YEh(gb.~`+s$NWdLlwZsy6?,}k}L5/pV!f1Ks)Z-c>IiKP@%Q^H4mU(u(;tNpj+');
define('AUTH_SALT',        'j+iqXXW*b5Sx)?=,a{a_B<Z^m/P9Y_qB/?9*(f}c2myOv$(nWxC9`,.R61BIt|DQ');
define('SECURE_AUTH_SALT', '<l^F`8r`*P@=.h`^wBc,#K|b7_Nqi8@sUC&,C4;bB9Iu +K{N8~<!/;>7Go7 !<u');
define('LOGGED_IN_SALT',   'ca1|#]ClJH K(pnOM(7uBjUc^a8erhWKlH#^2G8,jLj+^*B#Csy8z{<,t$Oz[A0_');
define('NONCE_SALT',       ':.SJ:Oj E^[=eq^w8!YniW*9gL#l5cPYH`|S~I!Te?h!na(mK{:lW/C*YbFM9AE2');

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
