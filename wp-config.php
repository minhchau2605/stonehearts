<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'stonehearts' );

/** Database username */
define( 'DB_USER', 'stonehearts' );

/** Database password */
define( 'DB_PASSWORD', 'Stonehearts@1102' );

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
define( 'AUTH_KEY',         'FSZfG2uC_7<U-+}frhG.o;ui8^;G<4%TZfrb,#Dxzs&@hyMq+Y?q+d^|AafDb<N0' );
define( 'SECURE_AUTH_KEY',  '2_/p}vJu6-K7}Do3^r?TwM(k$/+g6f]d#dQO+8H5HT`9Q.Tzk7_(Y|l--h~ng$T?' );
define( 'LOGGED_IN_KEY',    '):90K]zA7O6>seuqT4zYBDRRjXEqxTOX{/k1G]d. #;~g&<XkX:o;uV,]y`3,mJ=' );
define( 'NONCE_KEY',        ')8tgOTqr$:07;+!>lylnjTk!kUOUG@3_@)<S)B@ny}F59&d]$>~$-kEz2h`]gsL8' );
define( 'AUTH_SALT',        'g1>]VGQ2==+0H+qtpdC!?.6|5TO$i7VHV:@O|<YP`UW(tS:K*.?M((H3&>zPz|yg' );
define( 'SECURE_AUTH_SALT', '.H-UiI|b1%!V4&1[6Ko}^Yy:/n-3P6^$R-uSBr#j/NQ6q8T6%hF2E*t|o`LsCV#(' );
define( 'LOGGED_IN_SALT',   'w}[QzNtd 62^]Oi,u=kD O}r #{I(s~-@8DP_06ItDsa`JnQ4w_LE?Fn?JQy^TMx' );
define( 'NONCE_SALT',       '&Kh:G21s;!SUTX4 :HYBM |$NQ/:9g};:tfPsp8w3Bduh@Z;!{NrwU6>zh;y?g=e' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
