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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '}m+ TjR.nc.Xo-HQe*RR3sRh.eOB*-{|6#Nv|>+[Ba)0l~lehmYP/LA#qF1V}7!2' );
define( 'SECURE_AUTH_KEY',  '* M:LBH+&d0X-fq(:OylCKvmDOR8_oV&*lTMCGIM3pV)Y2!|!I2f[$_7}Jxr>m7T' );
define( 'LOGGED_IN_KEY',    't4^F9WRs7gZq6eLf_Chvrh4d#Xaqb$l(/_3-Cy3YELU}BPdR[|KqTxe/crS/*1-I' );
define( 'NONCE_KEY',        ' hMos4ZR~Muv#^kR?qw,e$u2U5%=]`~J} Q0wmXaD[.P<CrS3K2Y{Iq2IOf^d1p`' );
define( 'AUTH_SALT',        'Gt.ZZc,_e)(1I0KG_ 4uvJ%ui[!A)3^3fQO#WGb#B~_2PT}:!~Xg`V^csiml6^_~' );
define( 'SECURE_AUTH_SALT', 'OzW[iVr8V?!EYlC]uDdpx=mGU|6P#e;ZoO@0b_(mNN%x<-#tx0N:}g_|WyF8#|(^' );
define( 'LOGGED_IN_SALT',   'etnd@t/0b)x1(f+8vI y?uPa{QQ3+a`YSI?$bv3,vcu2{5Y<`_i+7vRn1-`x&e^F' );
define( 'NONCE_SALT',       ';q4j6>=GNIqJc#s8e]s5>z2f8)NbFl&##29,.xwamrsE%5V6$bY&cQvfR_6H<D;d' );

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

define('WP_SITEURL','http://localhost:88/demo');
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
