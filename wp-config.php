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
define( 'DB_NAME', 'wordpress2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'R-?ISsnc+nI6elv^;Oe=:n=6xqG/6gk;0,Ny52wBjXn|%h@+9(1te~LOdIsuw${d' );
define( 'SECURE_AUTH_KEY',  'r>p3N`dGP8Ie-G!?XHAvZ^09O,}j&0T%P*p=i#ndCMV#29jUMVr7e`k]45u5Bjv6' );
define( 'LOGGED_IN_KEY',    '[oNwZi$2`~b4{g{vyf!47& GF@Y|o-K67od@*vO3]~t0~mYCJ]`x[N$k*O-&0HG@' );
define( 'NONCE_KEY',        'yn]33.4EHb*FHWYZ=T`Mn,>`HxF^4|dIsYXiWI_AwU.h;;nW;w35hnaLVms^4K1d' );
define( 'AUTH_SALT',        '4!0IQIv-qJs3Ops(lO2LzbTdB`4IS9RnZ;8Oq)[kA%}v~pp{W>F$Yi|DST0/y9Ac' );
define( 'SECURE_AUTH_SALT', 'DV>nZoCD725>}{2,dR[_nO]/9hzWD^U=!_9OdYD,J%y6o*{``cY?c9}Usw.>Gbs}' );
define( 'LOGGED_IN_SALT',   'fUr;(d gxtBeNFv|H9^O3 DN{FVbUs`*PpK[yJUm((9an1aGGhkYc]D(X>NW>^$w' );
define( 'NONCE_SALT',       '#F/Zg/pF2T7{A>{}1j{V0s5/slk6Ud KP)Rs[ZSWFCD(M.(o!>o1ke96xx?SyoJ/' );

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
