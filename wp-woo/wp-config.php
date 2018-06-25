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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kanobe' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Mark&é&"' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@xn_Ns$MsRTN-Qp%?5x*.?7q@D-Yu9cT84]Y|mX]3jS1jrB=~LuQubUs0pcC!bMF');
define('SECURE_AUTH_KEY',  '4u< c_UxSu~e_Gx_0v;IN6+NoegMqS[nm)h|##$YE ia[[8/fUW4;9V4JX?*(Y$T');
define('LOGGED_IN_KEY',    '`^S2I$&AA!+NkFn2uu#a?>-e{+vlKG+x7J*{ztKG#][)`!)|J6a@jSy#T++)fnM6');
define('NONCE_KEY',        'qF_6bSFNXIC_YX ^!.]E i&r)fg9I-21sQ#6o&Q#zJ~6C];!]|mRNIM avod.<Te');
define('AUTH_SALT',        '+YGGu|zVps1c;V%R;t2f-*5l1LU+e~>?]N .MPc*Z-8KI0cTM*+G@4&[>a45X~4=');
define('SECURE_AUTH_SALT', '.(=UW(vTS9x`WuF=5LlKf@*U0 _p#&)H5Rv G*=|ACF1NYK@]:M-,F0cONEq}wK0');
define('LOGGED_IN_SALT',   'EMI-kwEnQz&+359 MM%|:3s_tN6|Pt/^5^QX,b}zC02zApU99qp4mV|[O4F}LMV_');
define('NONCE_SALT',       '}SRT7GsT%hnN9J/nSin{,pr3b0AY8%[}CL7[qc0f~vx[>+QWe0LF*D/:O`NX,!W,');
define('WP_HOME','http://kanobe.test/');
define('WP_SITEURL','http://kanobe.test/');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kanobe';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
