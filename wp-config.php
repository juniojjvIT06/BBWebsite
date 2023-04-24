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
define( 'DB_NAME', 'bbwebsite' );

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
define( 'AUTH_KEY',         '%l|b.!KX!IS5%t}#_Vf,~J1<vY$s,{,*Csa:i|LQc*r$U@TI|A.y`RMrbhrMehp}' );
define( 'SECURE_AUTH_KEY',  ']&P(Cg` vC/v<N/8d`&#%`[KOd}(cxTD4yh{@(<;W=5mZ_a+1s4idcMX/<r`u~Uh' );
define( 'LOGGED_IN_KEY',    'IymDo@@4/]y74:ul18>~h.:gZ R^LxC,)@lQpd3bPD)<GwGnEleqVenU4?D6qbXT' );
define( 'NONCE_KEY',        ')Xf9u,]Lx]Z,MupMIVtJQ=.9oddr%,|%&[s=qT;vZ;|_zl;*rmt46?sD<}|j#7GZ' );
define( 'AUTH_SALT',        'jR4kk1YtAg2-C:=WDUP!HTE`]ax:2Z+rx|2eDTxP~K4d,4~;f@q/>JMkR[2;0|yV' );
define( 'SECURE_AUTH_SALT', 'YyLie[r.VMipCjkO6G8 l=Q5V!R8vquz%zYep;)HE;BACrucL]Bb%)M+rJL#88,)' );
define( 'LOGGED_IN_SALT',   '2H+WANjBH<kN46Zi4_[)#uPGf&83|T;jN<7Y,i;#Zcvi#w-X3QA(%Oa.qI|btY4<' );
define( 'NONCE_SALT',       'YoX.?w@rN@n}pEh5H`e@YtFR5W!3*#=uRNOUprGO6/>Wc;0?5)q<FG_z8T?$u-=G' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bb_cms';

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
