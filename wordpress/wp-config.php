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
define( 'DB_NAME', 'shop_wp' );

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
define( 'AUTH_KEY',         'N[lr+sZ,RD};S.^ROm+ndN;!SlG;+P}Qyvy4 (w6>QQsA9>+A5;)>o-_(,C]c*5f' );
define( 'SECURE_AUTH_KEY',  ')#,8|TY^lotE%kuC+cLG/21_KwV|&lgIN6GzG{UjM;U^v+W+%9;f=9=2)DX2<_z;' );
define( 'LOGGED_IN_KEY',    'sC;sl7,PAL!ah;dvWoX}o[);dN6ie_)2D#XJb9G|C0*4UVx~#s`$|6LON_>vB1h1' );
define( 'NONCE_KEY',        'B*FCup:oOy3|%cq^/u8Kj{xcWv<c0B-xmtf`q=TpiLQML^)zV%1i=~]Pt|toxvVy' );
define( 'AUTH_SALT',        '2lW+I_F}=pXtvK .R[19i&>y1}D?;uoU_N}OvsOs7Vyr5@JC3~{u DQIWyKv{-y ' );
define( 'SECURE_AUTH_SALT', 'yPgr)C2_@MVtj`d3]i8Hk8PxrPn))Q?J A4e)hwTZ}S W/TS5;FeOYCWC^p6h*$6' );
define( 'LOGGED_IN_SALT',   '*{XQ634@gDbf18zk&Ff&@<`-cnMN3SSv/M}m=?C_aOzUXvc|jLp@5T7k4TqcEg*Q' );
define( 'NONCE_SALT',       'a@k)/J97zg2P5Oni%bvL1^~K<_Q+$qUABHWz,/I9}V&K[M-0Iaj-JJAAt<>?OVN9' );

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
