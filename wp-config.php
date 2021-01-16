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
define( 'DB_NAME', 'f0478686_phohabits' );

/** MySQL database username */
define( 'DB_USER', 'f0478686_phohabits' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Anet2207' );

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
define( 'AUTH_KEY',         'HWTN7=)HXBG@lw,~5ZdXGccP{_4>W)GJJufnPG7[TdI)Z8D,<Ee<BB|T(z1B(k3A' );
define( 'SECURE_AUTH_KEY',  '-HO.p1g<bhVtHd]xQi3Zts= l=Pr*?Wh]kDFLX87`TY@qfa[mIh6}K`Kk_F!mgoM' );
define( 'LOGGED_IN_KEY',    'D/^KBRZ3(sT/R=4$3T>a@Py7,f57o}wKdjT L~PN{_rA=dbW(,(5z_kO&/y!|?IO' );
define( 'NONCE_KEY',        'b2H/uHsQ|b:F- m9nHSdl#lgy<Fha}iAOW(-v{G^&rT!DLc}lqN&TgWk>9fd2YoN' );
define( 'AUTH_SALT',        '`F*#5&2B^Hxfs4I]Vienm:fJv2:/Ixr=ZOC0)#CP^b[&4JS9Oa7ag?b)kut{*0:o' );
define( 'SECURE_AUTH_SALT', '!L/p?5zV5Asw^_V^6&4t9I^dtytKK2(EjUJj_!;nzPYm_y/!j#R(4M}=:B6-`B@6' );
define( 'LOGGED_IN_SALT',   'oY?-Urp`qy[`46Ch<W%g,c,-}d;?f@}A>g*?&2?6~6{1]I9JHLNm<r|U F{F/xNx' );
define( 'NONCE_SALT',       'WWkhv+T+->Xy+P5]{dm=-|ze_9z)mST:9ZBk(IbrW(!z9_}F:O[IAplTQO!8phqK' );

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
