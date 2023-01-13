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
define('DB_NAME', 'wpcicd');

/** Database username */
define('DB_USER', 'wpcicdusr');

/** Database password */
define('DB_PASSWORD', 'wpcicdpass');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'C%-Yi^k6+o(R=K$3$I*R +.|BQH81[qblbYb|To4+W{fF(cR-/3//<5-^FrHFscg');
define('SECURE_AUTH_KEY',  'tKlY|sZ+Hk`e!Mb@xC2>h]f+/-eaHENggZV[^rdFml;=Mbj4C>yA]B$o|X| >CkC');
define('LOGGED_IN_KEY',    'C2;#5rA0>ijA>K3#[f57Mz=p[C|G|Vs>Iw@f^f>8-YTEQQ|QPgZ(BQoiW_qJZ2^8');
define('NONCE_KEY',        '+1c|NC+gEL/HhHM-go&SUX{IRFEv J9*xMFPz7W(<OIzXMjDGFo}Jd!D =3/m ;0');
define('AUTH_SALT',        'ru8L D<;Szk{uN4k/miEw_x;<tkvoy}^9C^B(kfpvR?J4{}MRfG!0aT#b67}B0*+');
define('SECURE_AUTH_SALT', '$dy8Xz]%ClU-h9 b%d%X(V3>[%Vn?$]$8MtqtR_<XAiKb0<F}8!-IqIH]kA^N^RV');
define('LOGGED_IN_SALT',   '/[7*9e??2=ve-z8b4$h9-tW<!GSQtT:M>vRh]b[!gr|*(+?zo~2c[{9<T^n|,eG)');
define('NONCE_SALT',       'yn2y1wZ^_+<A`r-9HH(j-y;5:,?zXdZ3)+-^)fX:R0427qs>~o,=XtY7K~|*#|&_');

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
define('WP_DEBUG', false);
define('FS_METHOD','direct');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
