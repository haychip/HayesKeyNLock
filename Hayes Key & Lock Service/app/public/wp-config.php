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
define( 'AUTH_KEY',          'cDShF*-@r6[6/:Kc4Xm!ec[DT(p@VPna@^j[maGjBug&=9dDi;T>;Of}]N)J?eO<' );
define( 'SECURE_AUTH_KEY',   'o+6wW[Hg_<jUP$,uupV{+Y|6.*j_4M7lM^IKn+mb6y]JZ%q7<><d{8u538 VBV.d' );
define( 'LOGGED_IN_KEY',     'T;!0Mns1i],6oG}B>%jgEnqW7D7GKB9`VR4%c.Qlr2Qj8DFg|CZ/^>HVX2dM6LlK' );
define( 'NONCE_KEY',         'Q)51WXh5#/enme9+6 eGk(_!wBh!)jp]!_{.t+* i~A>l{*M[#JNrN(<5`DG=MM3' );
define( 'AUTH_SALT',         'm{/;6 8#_5`q}TeU~oqnJbN6sGIC>UGrN;KUaiNa7(^@[?b@R:6+&7/!=Zx|PRfE' );
define( 'SECURE_AUTH_SALT',  'N*o2Hhh(,hN,UCyo1O~F<uY5tZh>u6&Um#TT7@peC({(:+JtN_<;Td.fT.&#<WWI' );
define( 'LOGGED_IN_SALT',    'rI,3=zuQZ#t%x_):<JxDZXbJ+4nnvbusFw,b(eG>jJF}R:6^I+dU5R}WOzuqbf5v' );
define( 'NONCE_SALT',        'G2G v>Dc@zj%VNg[EBj+6jErMx/gVuE3sRpFY(qAOQTH|PRcc`oQSzdR4e|mzaw=' );
define( 'WP_CACHE_KEY_SALT', 'xS.[:bywaP{Y.P&t<aFuN=9BL~XmtLKFPY~J5+BzLc7K5_^cbrA7cklHpvr,dm[c' );


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
