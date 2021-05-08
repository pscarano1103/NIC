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
define( 'DB_NAME', 'nicdesigner' );

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
define( 'AUTH_KEY',         'S81Uxtgp]jh!8p#HwI<2(tqo2ex*C@XsoF48+o%8!%L[K?Ng6cyg8,|h:l6-{BZw' );
define( 'SECURE_AUTH_KEY',  ']5*rIM8CiV?.wIo`Ar>Azt*rbPds8j>9Rdr:6~I?H@)=?Bt|>Y~!8bhzebopOZvI' );
define( 'LOGGED_IN_KEY',    'YB<UxpS|_L-_5#fs=UyL#?G/parSLUS+h(Pf|L7H3H=1mDmHfAeY[GJBID{XA]?>' );
define( 'NONCE_KEY',        'qvA $;}K$7EzRq8 <E:PI?,@5[+O/+AZ,or2r+{g91-8AS%BY(Sr?%Nh^(MX:*A$' );
define( 'AUTH_SALT',        'syM?zfEqb[R3pu!)bVlQ,xC([5>9M^{A{1v_6<aN1fqdh}ZxEEP5%+xhQBrgT&4$' );
define( 'SECURE_AUTH_SALT', 'Cf5NJ/oUD?eft#`? BFkfc4Pw.$[MBie=~fv2wGh[Rl)<17[8L5%SB>^CXfVJ/#L' );
define( 'LOGGED_IN_SALT',   '$#PZv`s2#N8MJwDRK&W!@j^ZcBJ_noM/;owNP3m56L @j.MCg1o~SW3B+Cd(zn1Y' );
define( 'NONCE_SALT',       '[*Ip*:BHiUQ`[uKjP}m[=S^*-MLh=%y(XR%s{=a*9~%l7s~^nD_q@xQ6XQ68*A*k' );

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
