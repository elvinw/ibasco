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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wpwc_dba');

/** MySQL database username */
define('DB_USER', 'wpwc_admin');

/** MySQL database password */
define('DB_PASSWORD', 'wpYqpvWRME6YTZn8');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-T855`aE:^<&c{e*Ky@*qJhC?=!_(MI+teI)N5Yi^iw9L)Z:yiKTaJ@wVUgeT-u3');
define('SECURE_AUTH_KEY',  '_S2>A^RK^GmPq} 2(M-}}Z@wCKH0OFEn_Wa<5D) c=)POC?qAIV=R5t^vADSCj<O');
define('LOGGED_IN_KEY',    'h_jfN4% #f=_dJI-U8OGf.Ti-bG0$3IA.gqp_.9n1nA4{#nxpM$F~H*;Fc:2gEGl');
define('NONCE_KEY',        'Q? &1jMv&q{jN9Fo{B[Z.iKCgt2DeJ9)*13;P^.68u~dCS3;p %B7& B5ou^K6Tc');
define('AUTH_SALT',        'RcZY)WfK27kuoI&j?SF.qspv(c4(n@PzoYGP(kp5UABL/z[igljxZ5!o:6+XI 3&');
define('SECURE_AUTH_SALT', 'jKcrph=$Yq1bf0HFl;@0,ga>]V#V[wr&Xz5{G-6=T!{qEFuaQ+N`1BSxZ:|^9fY:');
define('LOGGED_IN_SALT',   'L3P.sq|.2_P2XnyDh6O2vHZF>E!},(z)78A-R6>Wi9={E=yK-?(/}d8<$lo4e+!5');
define('NONCE_SALT',       'fN.bH%-+$y-kQQ)TQ<Z{P.&Fl}/U8<}3an2+cH,1r$Iu-.ht>Vz>wP]R@.JB:5fW');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_1_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
