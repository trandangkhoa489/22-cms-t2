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
define( 'DB_NAME', 'cms_wp_tuan3' );

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
define( 'AUTH_KEY',         'i9Vs% ^N?XT3U?)`<0p_ha3MF8,v,vR4d:f`@%:H+`_%jP3jO?BKc2GK:4mn0aVu' );
define( 'SECURE_AUTH_KEY',  'v{Jt)Uo#b]S-0wVwj%6)$I%|jm6rd,ovY>UU<|3 d7]3a)D)*(r:_oDG2$hWCBW{' );
define( 'LOGGED_IN_KEY',    '8Au b3}#p?]#0R`Wd.|+i])]%{y%D~r~5.ofk2@1*fVP%u3>dG6y#L;)e%W_(:zw' );
define( 'NONCE_KEY',        '~~zo_,)&{QWSBTJS(Ak:<!r]Z=7DKaaMLpK3S<c,+~vrH3T`KrlU05<sbjd4q1YY' );
define( 'AUTH_SALT',        ';1{*>j?{NFwG_i[v!@/<kz50x@uqnJdBQxq$k8PZmHBK0&]yV-Gu7zOK6[kK^[]{' );
define( 'SECURE_AUTH_SALT', 'm$aC&(r&*h<NVvls[O@,FoD4AEctU %O6C0p.oo^HC1,*r$@Kf|4]l0#:w^haR9F' );
define( 'LOGGED_IN_SALT',   '4[PHY`u/1ovf+lfD+CiAP{*MRgF!Ix>2zNUIp/cSn-f%n3pUQV]zdojL%-Hx^9!w' );
define( 'NONCE_SALT',       'J&qX{,vThxQjGbzh?ngP,b+/Ns$=rWf,<{7eICT>gX6MMM!Jay=,_EVbpSNl_O_>' );

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
