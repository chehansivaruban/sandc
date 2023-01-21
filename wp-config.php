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
define( 'DB_NAME', 'sandc_db' );

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
define( 'AUTH_KEY',         'N@>ggR(<laE~o%Z-fVbaHZPCE>_7i+af~eVXonpL3uOw,k+:4BC/}a1>[t|RX-]a' );
define( 'SECURE_AUTH_KEY',  '6_-%3H0kmq2%N8d#c5!&fjw5#pBZ[wbK>,HpOx-qHfo<^yA3AVx]oZroOIHm$M+#' );
define( 'LOGGED_IN_KEY',    'Z.khW!nksn%OO4uU~od`5l0,<7i^Y1Ilo7RLZ# r;C+V~(C=[ay`>Fg#@H|Zv6YS' );
define( 'NONCE_KEY',        'R5XLUqO~GW/ca>u><:.1N!ZJd=fwbh|jL50rqP/EdV{}d~zfQ^h.B9EQ=0|lzmC2' );
define( 'AUTH_SALT',        'u!=$?`3OXJ%!E2&WDt;_Liz^7yFAVS{bGWgpGgU2QblG3v;o[HDSorZ)S*-0gb7N' );
define( 'SECURE_AUTH_SALT', 'ub;Mcu_Dyj2rMYtGybUPc6_|q(&7/ {;It=C5$vC!#n[xEy(#{::uOP7maXmx9&m' );
define( 'LOGGED_IN_SALT',   '7Uiw28Kt{}1A~oSDPaW&ikIA})lLr7q%w{zV7< g7/fODVSu(Q-W]3,~k|R1lb^n' );
define( 'NONCE_SALT',       'uC.)u9+k[{$_7G#[$uj-r21%@!j#0Co<wNBR@>p%%LA6f/x}eJ;$vj~{Z5g]mX$C' );

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
