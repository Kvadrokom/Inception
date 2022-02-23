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
define( 'DB_NAME', 'RemDB' );

/** MySQL database username */
define( 'DB_USER', 'rem' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_ALLOW_REPAIR', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@FA7!b,@@Ma1yG)DkF,q)IQK*c~xwXJ;[t|bA<1?Gwxg4bJ5e`fw_uxA_xAM9g~@');
define('SECURE_AUTH_KEY',  'uC{a[-]uVh:2&VrvJYN?X^KFs7J#Y(@Xe:j~h:Oz5`c@@[|0$,B|%|P[?`LBvMN-');
define('LOGGED_IN_KEY',    '^UNDAp--WuR3TO+<)=rJ[Ezpq|<|n`[G k2:@ihb1sAu,+quyn$tO_z$Usp|*k^a');
define('NONCE_KEY',        'yP^2whXsr3W]l|R8Iv]NtY^#eLg29HhIO9rNJ)Ch+HL4g&iBHRHDj+dSZm*/6X.Y');
define('AUTH_SALT',        '{!mQZ5^S+0A6?~Ka40lMIl@}x!5?n~5Q@+0KwBmi-KqbyDP>67-}O5o+nPc#Od&]');
define('SECURE_AUTH_SALT', ')&f6zlg({8# ~*+W<H>|bw]4@uV?cPX!5b_#x`/=]s/:Lpi_Jc[|}[xQ(it,nMO}');
define('LOGGED_IN_SALT',   '||JF3pX;R+@6P|Y/j@{:A16sWo-9?GXxe%o+AUZ[(Tw[xhB@>)H(Ov>+~M<9i|&X');
define('NONCE_SALT',       'o+xnQ}AWUp2c/}3BHsIx8>vb nMUI+z[uL-tS^-|)Z;#:/51 u_Oi5Q-SJLD#cqN');

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
?>
