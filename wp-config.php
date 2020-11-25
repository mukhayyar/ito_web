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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(T=*0l,D&[vD5Md,I:VuBCF6q}*5WV-Nm$bh/gyE^|Npyj1dh{+5NL9P@Emsuzf)' );
define( 'SECURE_AUTH_KEY',  'zFiyS>.!!2ZlTCa{-u:]m>kG;Uve`WUf&?J8?;jnq[^b=OnxBzq4k~cb<]$U~#x*' );
define( 'LOGGED_IN_KEY',    'FPF{*ndxzfN[4_m97cG9fg~Mo)b nj(YfvgX^}VOk!$-/G|IH,Sb5FQ|95dsNn%F' );
define( 'NONCE_KEY',        'nx)@=!U~yNV_(K4#{ubfleAECdgV:0:w,>uaL2PjrmVV^kJMzUaeLz${o^uiSj#z' );
define( 'AUTH_SALT',        'GD=k$#Ke;nxKnGI1nIy::XC)q#a5.zLrw>@h~d.s[8Y@1EScdXN]P:6rbAn0,Kl]' );
define( 'SECURE_AUTH_SALT', '*{B+N~Z2H`x;`EPg)S1{w?SILe%ax$w=9m Z%)>oO@*o-z=:y?b^j.3@c@OH,:Dz' );
define( 'LOGGED_IN_SALT',   'Su-?>u_K*frx}#D?|LrKH}}C1=PRVkic6_iF!-!o-&#9f>IAQ;c^9?<w:G. Lnxg' );
define( 'NONCE_SALT',       'R3qS.V<a5|=.2}k1-.CCiVTL#UXqLZW>`5~*RGBc-4}0_{MK9EfcG&cSXrfEC^j|' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
