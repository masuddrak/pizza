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
define( 'DB_NAME', 'wp5' );

/** Database username */
define( 'DB_USER', 'wp5' );

/** Database password */
define( 'DB_PASSWORD', 'do.*m[8_o6*nU_5L' );

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
define( 'AUTH_KEY',         'obU?lDy*yElk3G{m F_-.4jFu!fq<|lMG_|?HTI$*L+6|fZJ v2`eyRtyCia?%fz' );
define( 'SECURE_AUTH_KEY',  '68XY0^ #^x425AdKxBlzU5a{sBy?2`bODlX~1iZo+/ampUX(xX[<@fz-mxH&|VXY' );
define( 'LOGGED_IN_KEY',    '6B@&C/<O4W]#8#M`:^2.f3igKHZP]I@VD5#:8D$nX}1 &_[$(gJvA%uStcrUzn|v' );
define( 'NONCE_KEY',        '0>+TNghy*_Tq{+lvg+OMX!x F#!=Uyk*_^er[:[kmpjGBA-yP{!(V=Gb6j_Z&kn6' );
define( 'AUTH_SALT',        '~sad*G/*Bu~W~_g4]*!W=AnuZ{9]*sS:zK6,3#M%1:GzHP(|HFjga`Je=CR^oC[9' );
define( 'SECURE_AUTH_SALT', ':|^x5lrQFj5S7o-:EUArV=vE+%9|d->8pg6C..L^*H$KJIpHQa_A6TC,ApkA rRK' );
define( 'LOGGED_IN_SALT',   '0XBnrJSz|TBWq D/Hz/:DuAAO, yb4ezXi[STlN dLf&&:zg{!^5LGKOyz VR.NK' );
define( 'NONCE_SALT',       '1W-YWo,D-Sz=D|E+1jv MW|9YB%ByNxw?l_}*>Q58f}Q4f~NZnpy8+&=V!,k^ ?f' );

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
