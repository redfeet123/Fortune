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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         '.YS2gdL<lH[|!$xh1NYa|Ep0y$vgG*4 SKCHzPR9.i|fNhW9^i8bh^=&~l-$_`zo' );
define( 'SECURE_AUTH_KEY',  '2bkH!mVSU1*:k.XtBa1;hbTp`xUo~+TIE#q:O<4!m6z}#r2slIG,F:8xEMFq!8&X' );
define( 'LOGGED_IN_KEY',    'YD.}|u)7V_*.%IuUe_)|/`+aIo6P^v P(pEAFf_49b9qyz3tRT/_{O<_;R+%QP?0' );
define( 'NONCE_KEY',        '(7cvmL!Nz;x;D1Iio#>J${x,=r~W*d;*m3nf+Uh4@Z4f`.czUpu%nf7(N@wllScn' );
define( 'AUTH_SALT',        'MAMFOAyf4.q9MFb[.a;yr}F=z- !V%j3C<Lym9a=+j4y8>aze}^?onxG^R)R-p77' );
define( 'SECURE_AUTH_SALT', 'V9/[*)2DPO)z/d|F-3wOmKGq7xos&bCO)*9c=%<BC)AKz< vM:kMqM2nF(Mah?m*' );
define( 'LOGGED_IN_SALT',   '91)GzksGG0=Btg_~sd-G[hCS:eG8!Qp|#TH#8.BW.6=;U7g4&Q7L*{9G0Ys0(w0o' );
define( 'NONCE_SALT',       '*PM.%=W~m_u_c$:JCsid]5L~}a$[S-es#?$&+0RD9od[Zm~q2y}[v,6J#h^e[Zb>' );

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
