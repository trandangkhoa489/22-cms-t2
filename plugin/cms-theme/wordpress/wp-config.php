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
define( 'DB_NAME', 'cms_theme' );

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
define( 'AUTH_KEY',         'ZQvhba`,mE[ZvXOHd]M.0QAn*}#lI|n=}9.w J#u4Ib]|^30Z.mTUAf_>GvroW.m' );
define( 'SECURE_AUTH_KEY',  'p |Q8mM#^[nfKV( xCxky`U50a*s1Jt76[I3V-uHwKue<G)uCII~.SqI_EHH5HS(' );
define( 'LOGGED_IN_KEY',    '?k9w]%4Zpj1G,9*=IH=@%5rcMPzX25Mzj2|I:s~(288hHv[a=J9)L@X{>&n^``nk' );
define( 'NONCE_KEY',        'YxM*hZ_nEHF|l`tDZo#4xK#%BM!xS+?G3~ySu8F;Z1 ttj`CM0w9<T`5vGmE>= y' );
define( 'AUTH_SALT',        '<4>HUGqbF+/FBT&lZ_nOeOue,}lj*2i|pIcIB0Z%?6=oO9MV-)M].O7LU[~ULX=3' );
define( 'SECURE_AUTH_SALT', '^IF<>@1{!Oxhvl{M<<}Aa*])m%T,,aI:mctHftjo,dTwsuXCzpf&j8B|;Xo.i+-.' );
define( 'LOGGED_IN_SALT',   '0,7?1/7xjM.7O#[|8M>y+$y^%P@cB$9V<_`rn<<AiVFKGV^-b+-nSl/4B:XUr/Rl' );
define( 'NONCE_SALT',       '&^6PUCh;2Xq6bb162&#RjjJzXk5=VP>9,K&PZYe^KsxG}*V@F$t W&K;gf.)D.vI' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
