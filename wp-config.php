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
define( 'DB_NAME', 'realtyctc' );

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
define( 'AUTH_KEY',         'e|-uHMU(_%tJ3l`sU0,}n]9{:=]u:1$#ulkgLb~_MFfY;&*wAWt+}.IX19%0/Edv' );
define( 'SECURE_AUTH_KEY',  '[+6r6)$)&2>pa8tdr7U/P`2xV>l`xf.CuxOX!jq1Bad3wrpW:EpkDd@[e qrvDf3' );
define( 'LOGGED_IN_KEY',    'E4>1,*LJcZL~&!PN+&!cHla{ni{_I>Nt~^fz[. BIq&_D[WVJZhrKmVR?-UrL<Ru' );
define( 'NONCE_KEY',        '.b0|L&_DVV.]/P}W?aRG&{^/swY^`0NumL!58;T LmleSk!Sf1|2w;/298sK56Hb' );
define( 'AUTH_SALT',        'nrK&~i5bdJu[?uPR}Zz}Hu){DMtv;b!TZ@27c`m[S0^B?|Zd.Xb)M|}3G!&H*a{`' );
define( 'SECURE_AUTH_SALT', '.Lo>W->49QZ^6y8&#tQz2?jvwyrJcoX#1{CQ}q.Z_;Y K6?_[;x-$5#$x*+f:o;2' );
define( 'LOGGED_IN_SALT',   '=!hLn=a,UfHV=^%xB$(1S0#!o-U2&KrAW|zkt6O;>M~F#{q/AiTkxb.&ug7NDN!O' );
define( 'NONCE_SALT',       'luafo(7BcufLsH~=z@z8Kx*<Q+r;}>B::7O0<T9-CN2I;#Tc9Oz-&@mTI@(YJ5fz' );

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
