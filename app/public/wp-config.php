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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '~?1H=UEd=QcI/lYDAG`>0DF T(R6#qk0rOn$k)i?@n8r&L+VP.LddeC%,3oVnS{b' );
define( 'SECURE_AUTH_KEY',   'V4n$=w$~Jm82pQg[W{0LZEz@>9`[v:/]imIh$>z?^zWPM%,o|fi{Mh<3N(M}L0qT' );
define( 'LOGGED_IN_KEY',     'w}t#|?LoMt.0lCOvU^^)2/c9as@0%~RE7l~UOQ+)Ua9(Y]^mpk!IZm.wXhGZh&j%' );
define( 'NONCE_KEY',         '<`xZNP#R)8JPNX>tb<eX]U%bl]1Im~9&/)S=x@sl+/Md<MF[ifY?eOZ__P8__XQJ' );
define( 'AUTH_SALT',         'H6kQZP;mhSoD?iGf[SqNWHd}!sa{!/V]piI/GsD.=,` OFEmE5<BHiK1ChW09 >)' );
define( 'SECURE_AUTH_SALT',  'T? ,+fvsW(O;a)Vn$Z-HGzWQ`=lGymdR3nmB)[h.-ZK8]!I{HZ<<TbewEVg2@|6r' );
define( 'LOGGED_IN_SALT',    'h&@s#JOun eZ`I//qfPx_+%1~]krT~/i*15YT17Ht6p-a(9JR13AL@e<x:;.?8#c' );
define( 'NONCE_SALT',        'KLip>Y|B/ti(&}D}-=)C=!.uj$M+}-,23p-`Ch<}<pyHfS^Y)}KPj|nN:hKE4&, ' );
define( 'WP_CACHE_KEY_SALT', '+71Q!pco}d@@cGKY>u;O@f9AZV3RcLj#32>m6:T&#QE(IQe=TZS.d@/l{>%eFz}*' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
