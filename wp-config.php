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
define( 'DB_NAME', 'ajicodes' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'PworD' );

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
define( 'AUTH_KEY',         '433Ipyryndy55n)dsqxVDz@v=fuDh;pqFQi_gS*bA&gQH0kU>j3%7c^Uob0LSl(Q' );
define( 'SECURE_AUTH_KEY',  '}OHx:o^!#&K7>Cj:*$|gAb^,B9x*<fnnnW )[xR@)[4r.W &su4KUx;CI0@^-$U ' );
define( 'LOGGED_IN_KEY',    '@/vYdEXAoHM-{nstcOr|!b(utWou_j-NA:`Ot!>.uc~Bm^hN({$E,g64Lk!}<x9I' );
define( 'NONCE_KEY',        'g]yv/kz8|Xyl&Y0&:@o1O3;b9.5{yhp8z!Q}$hu1q!Y|9v_6 }uq<:e&(69@+NNC' );
define( 'AUTH_SALT',        '{^ o3cNBJxMiiGQ|V|}bo(qQo7jWzA3Zz)E=Di&%#Qo6(n>$2n[Y0|82>9--(egN' );
define( 'SECURE_AUTH_SALT', '}MUvN+Db[lq0.:(q+2N/IL`2M5d)F57tnC-3,9QUpRK/1Q9i)GAP<Km[KbbL9T|a' );
define( 'LOGGED_IN_SALT',   '</ImCp/;si<$W#]yLR_by J16o:WK@QCs|8 FX0md<I=S<I;(B!TGrFa[$qmpkTi' );
define( 'NONCE_SALT',       'b*zKj9hTDo?W_!;<ks!0rzkS@;4V;Eyi?QJINlV+1VG~_2LzyoM`>Q<KPu1.LPnU' );

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
