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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'teknonewsdb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '1{ki}v(8vnZ`Z#9qo(4n3S*>o)e}!QHMCzx?/@V4*p{X-C2$v5Th+PE3Gr7FWpnB' );
define( 'SECURE_AUTH_KEY',  '@|A*7n!XF)0i&~o@^8 XK?t6qOAO}QF|N#,Js8a%e@X)!+;0{wwn6+T:I^@:~LXZ' );
define( 'LOGGED_IN_KEY',    'nU}^6}f54?8N?UU^>6>0O?/|:g(-~eO#$MSP&n0U%[:C5Z<y{W:y]uykX&t&Mz?s' );
define( 'NONCE_KEY',        '%qgRK!:GafXi#xrQ-~q).G;/)x1|tjF*>w^h=9jz<O|g_l6vRem}_$OHO]~C5.ox' );
define( 'AUTH_SALT',        '1C_yO x`4bne$eE-tdsu&X]Yx!#DU|X#7^q%mkENe[!XE~<trjf8hqi,Ex>VFW0d' );
define( 'SECURE_AUTH_SALT', 'KRkjyz$>+eISef?GfsggxO/>E](;*&}G/dDN,/a4oBW.Sc:q@:q$>Ssk*}<NPCbr' );
define( 'LOGGED_IN_SALT',   'g/q*82mkKdLq%ua:<XVkv2;`,g5t:&jm35)6Qgrwp~jYd?8{SOIu7qWi=;$CJ<jO' );
define( 'NONCE_SALT',       'JVUS.6oKu!)y`bCSw;fa+G{[pBRJZyLgds4G5L!7|xm6%U~x7hWw{3C_]~t(.tdk' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
