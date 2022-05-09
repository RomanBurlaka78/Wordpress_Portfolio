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
define( 'DB_NAME', 'wp_html_toWP_01' );

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
define( 'AUTH_KEY',         '2sdr[QK#18TUjq8$8YV#|)o}%t2,#}WOev-&!##p!v!DHuTId;58@fsxw8x9nV42' );
define( 'SECURE_AUTH_KEY',  'CMBwq5&v#1pTy?95wHI]!K`Z.3[ AYoh%(Q# @#mM_vDp:@8TbD?k0xAF:qC!_lj' );
define( 'LOGGED_IN_KEY',    '}.Jd}Bg,_mt&]vcO(hMv|HzxU]Cyo]Ocv6OahjgsgcK_J_K}H*sHkiI5b[W=g%0+' );
define( 'NONCE_KEY',        'AJL=i2D(AoRzR#Nlb~?nV,)Wp8dZ_zB8vDBD{MZar1nKm#=@s_6W7!mQbknlB;Dz' );
define( 'AUTH_SALT',        'Lunr:t fUxfhW`rhFHJnm[8e.,)0:3Fsa2-Au]}(b9jFW G71:9d@JEDZ$uW5Mvr' );
define( 'SECURE_AUTH_SALT', '>4!Q_Dqdjl$&Un@S^V4vtOARuBRV{5-5zA Tzg@<7qK- iV,x~,65}JckGX0l`K.' );
define( 'LOGGED_IN_SALT',   '|BB5FuXn<eA+b6{bs%}dQ0l_[%5MQ53b.C?uXL^*,^~Oz6.~zNo|u+nw{%{-HF75' );
define( 'NONCE_SALT',       'tU1YT=GWU2Tmp&z)$5[[()(>]iecRgExd!0]|DQ$3*uT,t@!SS~Y,T*1H8@=Rx^u' );

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
