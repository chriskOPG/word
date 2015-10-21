<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_test');

/** MySQL database username */
define('DB_USER', 'wp_user');

/** MySQL database password */
define('DB_PASSWORD', 'testpass');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'T)t @YVx#^.uG0C<Z,*u/2`B#pw=oT[=Em3M6n{OzHs<=tM3MW}SsX./)@E.e7:6');
define('SECURE_AUTH_KEY',  '+(J^Y=,7INUeQT-`[cB;0r??J6|YV>O&-U@BGS#3xGNW;f1xFM7s/e-D |OZUVYk');
define('LOGGED_IN_KEY',    '1wNENZlfR%&VsgMDF7rf;7_Sp~DyEcM]fWH$e?+$|=[nEqn=Pt KKv.3>mZ0usuP');
define('NONCE_KEY',        '<8:oe-<x+^yreS#h+zIpQcQ5~rYwx Lo9~i71I!HJ)?YF`I3X>C[sLZb!TNF[&u=');
define('AUTH_SALT',        'i{T#%`F{q9G!kA$2;3Socs^jGM%+]Bb9^=fZp.39[2T&z%i+XU3{ FhZA(Q)O17|');
define('SECURE_AUTH_SALT', '#[tkv.<R-`_YSK)nk3p:B+SyXF&)Dl]]YRBI7_x&{OZG(GD-}+S~q_l+I;^Q0[nw');
define('LOGGED_IN_SALT',   '.c2.DnVZIL0>6alSxSFa5-ONv,SE5;>-:/2NwrwI+@7v+@2$g>k/}uAB&T@4q>$W');
define('NONCE_SALT',       'd2EY2q(oxwS+}Hp==$_O=-+tDf=79VT+osxbX&-b*c8<>*KGc .PUWU(^VmxT+&4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
