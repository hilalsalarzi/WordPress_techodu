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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '!-=>~DR;o</M;^MWx#{HG&rIC[5Ol|b!Q/-Q>;0!SCR`W]_N!:,-j3L {UK~c:R@' );
define( 'SECURE_AUTH_KEY',  ',JD,>0G*BgGG{:0]^pz B?li)1v+/7g1SwNZ<X0idFL6gX>yLIm6-*!{FvS4uHV:' );
define( 'LOGGED_IN_KEY',    'ujo]WGH]O*j~o,4=u,>Tfs<!fWilz@pZ<C9Blv9`URcbW9b]_RMX1!?yRU6P(UC&' );
define( 'NONCE_KEY',        'I!$C745a@_d5xd.#L,=E@&?s.>BYY3HRjfO#XhBhZC0##tn%I(!2;)XGLPt)+kAK' );
define( 'AUTH_SALT',        '&)rWPQu UUe7,keo(.m]J#&wXwj-1amH)5)t3*cf*$Q^{.6)-/u{{$oC=N1NRG#c' );
define( 'SECURE_AUTH_SALT', 'DvPP<&<VnP^:Sq6@pQM6jO+U{?hl%.v;q6cS6G#etT2!]rI>l*9m=[t$Sc9ei30.' );
define( 'LOGGED_IN_SALT',   '#,c:$&t&-*Ty-{/&]3cTpw2]HJ[ejXCUFYv56nF8n<hMJ ,](_6q4qX@x9Lf;8x-' );
define( 'NONCE_SALT',       '#W/PB/UR`hh6oy%|tUPvDsRa?:XE4m>IwQ6+P/ixuD^]eCL`P6.2_21)%|B@}TbB' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
