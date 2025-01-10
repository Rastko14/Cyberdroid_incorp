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
define( 'DB_NAME', 'cyberdroid' );

/** Database username */
define( 'DB_USER', 'anonymous6598' );

/** Database password */
define( 'DB_PASSWORD', 'Python312' );

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
define( 'AUTH_KEY',         '!]Hl6YeN{?9&meHN%t>M}0opD+U^D):?e6jUjf421&TiaF1oy5$bFW^yuv6W8i!k' );
define( 'SECURE_AUTH_KEY',  '>>.{[LN=/}-Fbht]ft?BL3_7)X3P=Fhne^fW?<abn+lon)m}}F<hX]<$rW]jksU=' );
define( 'LOGGED_IN_KEY',    '!J]P}$/,^]Ur^(p-M#zg$!=xrcT Ka80tc:zoI.qo*uOe^/[2EckF&Ma`EB<E`N;' );
define( 'NONCE_KEY',        '9^Y  r(Vj-F,C[FBIUbUjs6^5)}AdvLBCQ,hR1GS8B7l0oPE#XRK$yTj#E[)Z/sN' );
define( 'AUTH_SALT',        '%.5zw/:Ui4s~^JUT49C>%!]1Zg6l^lg(3hT)3=M8-SP Utm${jqh6%G}=G;1t*>u' );
define( 'SECURE_AUTH_SALT', '/_]*&PBzIe8h3Y$#f &+O($@C:bN}YGxFqVkt1|8zn3p0u)&~I<Rw_M^w2(,s 70' );
define( 'LOGGED_IN_SALT',   '=lCD87$ry*d3.xCCoKcC%,)ct?t-HG6Ki@V/ix@lLTTS_>O/Bpy-YU+/q!JQ*0X;' );
define( 'NONCE_SALT',       '8EMI32S7OwqN`lcTnh)AjVI> +[{ (:V=@|psJ,^LV4oQf6LPpI=K*Kq2}M~Esp|' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
