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
define( 'DB_NAME', 'unlimited_life' );

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
define( 'AUTH_KEY',         'murTJ-Vg9-*2EPvKc9IXT-26eC,D$m%`sbG-}+pa=LsY4qY[tut>MRIMZoJy9(1l' );
define( 'SECURE_AUTH_KEY',  'wZ/`;H<>M#3f1UX78~DX<LYp9LhFl}`kS]VOvx8:$!*Hl&FWFQ#df6>s**zxu5n4' );
define( 'LOGGED_IN_KEY',    'D3Rn+xQVuz#3^cludO{5dl<OhReOBvS1%h416{W!f=PL O3Hpg70<pnu4@KQ$f,0' );
define( 'NONCE_KEY',        '!#O%Gk^A8Ilqk pbsQ3)p2[)t-|qXrH*(Hx2LQN=}do-vOU 7B:/xN`W*!dK^67`' );
define( 'AUTH_SALT',        'J7gUatK26kXNQgQkD}z-@e;5I/<rSCA(G+|~e:^f*7EN7/R7!_yE!D/gt5Cs5N#&' );
define( 'SECURE_AUTH_SALT', ')HvTm3)%Z8O%KBBFKJgCCW5(yK+Aq?aLTr;o[--}y9>*{uZ-J)Rh7Dc*:4-yw$RZ' );
define( 'LOGGED_IN_SALT',   '_!s<r[mdZ$6!L@fJ Eme<IAagq%S,U45)T.#}(`u+b|kAPs,gjA1Oe_VN_a6$u}3' );
define( 'NONCE_SALT',       '*P,u(a9 I8!#nx1>x{&r~U,-K7vyOh:eoRlVG_KM;3oAVnxZX(6d3/;N1m rykW]' );

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
