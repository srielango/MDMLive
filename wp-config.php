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
define( 'DB_NAME', 'mdmlive' );

/** MySQL database username */
define( 'DB_USER', 'mdmliveadmin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Av/]c@DI]eosorL2' );

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
define( 'AUTH_KEY',         '+sU=U:IhF*+DBFp)EW,@<F8:L}N3WM/R{N*hrB!71UL/)*-3$m<V:xtzgB;ohY{T' );
define( 'SECURE_AUTH_KEY',  'd1XdT}#f-oeFjwjr|t5Q1+!<GrER1sxgq1{am0T^+4Q,VLJLW^Oh=PV&2t3l.i1l' );
define( 'LOGGED_IN_KEY',    'mYUs4&z8k`~zqB<sB!{~j]T?Lvm `AQ9^}SoD@rB^35Uc(**O*i/F[*+:4:JRkBX' );
define( 'NONCE_KEY',        'w>462T1:-vgu/S~Olz9cc]<#9B21^oR{CMqU7#LESEI*Z4.-v^Ji$ e[H;xB*[hJ' );
define( 'AUTH_SALT',        'CcHq{z^a1|2VLY?VT:%p^X62&{qZTc]C(_F!if_}<;c<WA9oYY@IPJfVs/&3De}w' );
define( 'SECURE_AUTH_SALT', '*<P]d4JSd2!ohYx }~+qI>b-$L%/!dw6#>k@oc]dB_i1GJ_aCynBar*%O}3AOqu.' );
define( 'LOGGED_IN_SALT',   'n;jU!-IF<I?V}?pXVS848}-X>*YsKk {):Z lV[a:x?x<AS~ltrZZ2l$lK<V{Qf+' );
define( 'NONCE_SALT',       'l*O5}`Sq)05#ingTf[O>SxiG%k/p,NN~uv^q4;&XJVo&q]Nq`c. @?~i<ou?.1HQ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mdm_';

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
