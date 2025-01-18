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
define( 'AUTH_KEY',          'gFv+Go+VqY$:30;wr)-RF;<e<1R~%*TbVi1}x)vZ&i)PS<)el@R&w+4Cs[tV%o:J' );
define( 'SECURE_AUTH_KEY',   's<=TX:b0+r58JFWhOkmHa6*kb0:fqaYe92nc4.wBC;f:D*uo~JGMoEEK$A`Gyi[s' );
define( 'LOGGED_IN_KEY',     '875(B.WXhFegb@L!<gZ,/sGJcLIK+P(1IYW $v4?VrW}jAo:*%p(/VY.7fiw{pZ?' );
define( 'NONCE_KEY',         ':CG9/esp;^Lu<Y[#{Nox= :q(FrDx9]e9.Q(mVuKHw)tTFtJELu)_LYtq^M+3cuc' );
define( 'AUTH_SALT',         'QB,t]5[+F]>%bbB=s:6E6,?N5<OIDF(Svl%2P@E7u.el.BO6l6%HJm^b/<^cSbP%' );
define( 'SECURE_AUTH_SALT',  ',?KLOG8%Y)Dw-[^9~Znw?7T7b=[Z8Z1^A-V*yH4>v+e}]XT.Ub%0l2sX@=#6>b=<' );
define( 'LOGGED_IN_SALT',    'qeab9lH||>Fr>Oc)~8dV/:g7&|ATHt!YglC:b%3Gb2HMftAwyY.W@/k$3ma)^Q!Z' );
define( 'NONCE_SALT',        '(g!(SLUm^=xvH?47X*[J=X+![_,DHKX8nE,(K%:a/;M(mNBYjmu0xvr&4QM%zj:x' );
define( 'WP_CACHE_KEY_SALT', '8aW8E[p2EVqV[r`6I{hARo@o2Fizf3+}&5%>=4Z3VL1s/iGObOVGq:%X`XXU~b!-' );


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
