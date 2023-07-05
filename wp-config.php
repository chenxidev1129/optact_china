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
define( 'DB_NAME', 'wp_optact_china' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'RD<:1XGz4,(y.(,jDkFuBv)bY%zu:o->b$<0R v4<6Vkf/*KC1O}-3a4Y#]g6T42' );
define( 'SECURE_AUTH_KEY',  'y=r^GeS_IJZklhGBi2E4cA9z!]$(e#-RyT9(C_X][*KF{;Y=|xB!nz838Hz^S%c`' );
define( 'LOGGED_IN_KEY',    'g`pTuMX0iPB8Yy2S,JR%kb0~`?^84.:*Ld7m&N#&$4 /mji_Q0SSB0lXK)8L^#-u' );
define( 'NONCE_KEY',        '0D{Pwt[3TdI{e`oAAZ>$2{,j9JKo}#&<Vg?&Mekl!uv&b$le!37&JwAW_WT bKKL' );
define( 'AUTH_SALT',        ',;##DG#lV;o+CJZnW@K;5Euf} ^F?%OQB8V^K^Fhyd10va/wL[SZI?Ux82gSX|!;' );
define( 'SECURE_AUTH_SALT', 'O0lJy7rm8j|U.U>~(!WuuR->HCi&EcvfM{)^`C1HL{`:u}i5|IxARdD=0`uRSx`;' );
define( 'LOGGED_IN_SALT',   '+[,tAtjkQ+JHFusE<H|Nza{arA=5Lx3Yd)l?<sCO7X-Jg{=pHA&;x&99Bb#0k*j<' );
define( 'NONCE_SALT',       'sZ9]k8:Xwh3hb+q.wD<SQi:mi9xoE}<tpD&wX=#ua=6r1J,~]t#`zSli3ND)NFf#' );

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
