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
define( 'DB_NAME', 'mickeyshop1_db' );

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
define( 'AUTH_KEY',         '3[(rnwcamj,2d)$||6^[]_+l<D>LEkxi&,N,fA&KZu$Viw*`R26HvN*hpk^UooVZ' );
define( 'SECURE_AUTH_KEY',  'P2fr@1mu0#=WcqyAgG?XtUCUj4NnrvS5bL]yFZzo#uSxoe][uR-TU()%Y6H7CskW' );
define( 'LOGGED_IN_KEY',    '6Q# S63[#r<GdhIW3n^JN.Bd )9b9`defp1~Bp74=!ImL}0J/F{oM~o b2oJ*x{,' );
define( 'NONCE_KEY',        'E;Oi5Dpnq#SSG{FdNYO{%fi/?>!BKxIhDI>dlcEFZ8nmW^2Y(-7j<++^yK-Vu xQ' );
define( 'AUTH_SALT',        'mG3<UFu+]6mXOcYiHet&_]}xEy][=|AoHQO%K_IjLYbr|Y4%SDC%Vx(N]/;{}[{B' );
define( 'SECURE_AUTH_SALT', '1umc43?Y1~jkM4d+NhT-PF)*By8Wbe9T_qfK+bEt==fTcqgdK%ZZ(ckul6}!mTL<' );
define( 'LOGGED_IN_SALT',   ']L(gJ,al-^<FW&[ydlY;[`CX#A;B0N8X2,cYU]g;|Xrj};n,d)B,gD2{QQ,gcFiw' );
define( 'NONCE_SALT',       'ZY]B[/T,ZX)TH*_ e1>q9:,JE9r|ca{<LY|0VUKLR>M.$BGT#]`]g.Y`X)n^xcLb' );

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
