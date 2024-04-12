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
define( 'AUTH_KEY',          ');^KO,cLR-0cs^P! ?0cHnRN6q+8b2#q$1H5=fI>!LM:a?u*6iIYz6ZQjU:Lc31.' );
define( 'SECURE_AUTH_KEY',   '(t&WBw[!|rPUF8jKk]7bIz[nUv%nZ<|l+Rv+UG!<b`s;PRp^)3C0FJW-gypc&!%D' );
define( 'LOGGED_IN_KEY',     '8G@K/.S^9hC4Zte~e+* lSOr$1|1/)ucIv*p@G(9NQ`qSaQ:3!7>VoJ)}&0e)}N^' );
define( 'NONCE_KEY',         '9OX7g :jw(`o+eburI8E$R4<zS%!!n+{k9NOg.,FbtICWh}*uv)nx<7<fZMW>M 8' );
define( 'AUTH_SALT',         ';?bqg0&8P.@~U0xhn>eQnFQ63K)(%J4,@I7?.}v&Rl,[{]gk%7QHxCyO);Np#l](' );
define( 'SECURE_AUTH_SALT',  'Wchi!/u-~C7.$[:8he57gFyB-{x|Sb>G@q=gQ}n>svY`o!/V%z/n;rju9<Dn]|[z' );
define( 'LOGGED_IN_SALT',    '0g}JS*93wwN*C%!n*xcA1;N{p ~c($H:>,2f}a4:/VaEB.@w_WQ!s{5f(JvDX}A0' );
define( 'NONCE_SALT',        '`X&c}hk;.F+;B9pa{kq@^+&iMjvT#u0Qw+21kb)@k+mZ/Jc6oEc%z/tiZibVD)2|' );
define( 'WP_CACHE_KEY_SALT', 'O8i3_5|G*/c7(+C3GV|_v*G*UWSMycf!u!bUUuyC6|vzM)YBZYqRE29|H8ZOR03 ' );


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
