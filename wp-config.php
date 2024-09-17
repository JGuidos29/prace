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
define( 'DB_NAME', 'PracE' );

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
define( 'AUTH_KEY',         ';R;x-kq_O^$u7m>97rxN;KDk3~:Gi~1`0Z5xUO<%)nyw1^ rhGD1bxf?T[b7!i]p' );
define( 'SECURE_AUTH_KEY',  '?p{:c8c.5sssx#bNx01oDuo%YWOfn r5MWVE,cIu[M0W{E+v$kRbvQ#A9f1JpMJ,' );
define( 'LOGGED_IN_KEY',    '(X<>[$zE5.9|&6IhFd[%# $ak@r<z/r4K|,K<)-W6wqOx~W!Bc|32|WRvT**7uuQ' );
define( 'NONCE_KEY',        'SsSQ~Is6s{>!alRg`ln;}-^Er6DeEMF[+H_^:EqWC$Y(NtIh?-|&RQ{P9bGbN&X.' );
define( 'AUTH_SALT',        'Ge-I~g1aPYMtwxq;NhwLDBZ/&0X4|j6#R,X.Q0O;&CmATY8q_9.}|_zELC]RX!c;' );
define( 'SECURE_AUTH_SALT', '+_h:m3:f9Yk X6TU31T`TJmzR.7sQ*#qyd_~l[n#8{1AbcVFv]:bHC:Bik+[u%VC' );
define( 'LOGGED_IN_SALT',   'gWk^NbEp^^5UZDDDpp9@ #Qd-tsM<pWMk e!~]29hr9ct[e=LDP8H4]*Sz/bk!-(' );
define( 'NONCE_SALT',       '1(Rp} 5gqU3 fz/Pal;b?w#zGy=f<_[8+f>?_dmU.8!aj0U2#5M#zGS<?!J/PDS/' );

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
