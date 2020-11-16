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
define( 'DB_NAME', 'wp_wcourse' );

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
define( 'AUTH_KEY',         '()ws#(.Tf!7R]rylLL:l[r)%TxOmVEs4HPvF3l_u_u_^Qs$@Srvz+Hz*8B@ZAT&x' );
define( 'SECURE_AUTH_KEY',  'AV7|/VBKh{b!PL3#=`roPG>0QOp_bBr&VWuu^I6{]XXDxd@XF/@T<*){M(bK2T!,' );
define( 'LOGGED_IN_KEY',    '!Ox?xDW<-r4BU$cM`PN~&CbQjE3):RzVSS=@:<0M*`qm.,?pSN[#E=@l2AtloqA*' );
define( 'NONCE_KEY',        '$nO]SA?4TJ[9{mW9bix9N>|;1N&80toBs4gy1U;soPc?-xVo.Mg7*Z+lnI(qW,;N' );
define( 'AUTH_SALT',        '@6Yt# PHO2o)_dBM85T*=P?Gtm96I:Tj;,`@9&XVx66UWk#l++YJbim69XIP5(3F' );
define( 'SECURE_AUTH_SALT', '2{qn:3D!]#PQhG^:DGAq^c_Bo2~<eJpqGP++GLE|-(~E+#df}q)^Htx+1TB.!^D@' );
define( 'LOGGED_IN_SALT',   'zL@Tp,_-`wFDs#5HO!PFpA!8&,Ha6LRg/M+rrhJ*Y1,__H:|;_!!(jhyV.YMer$%' );
define( 'NONCE_SALT',       'e2#Mz^x;#OYCjII5Bsl^QD:Vv2Sm7^JDo+3nGLGN}|x;yU3/|Cz[Sy3J!)<Q$?)K' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp';

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
