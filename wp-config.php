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
define( 'DB_NAME', 'Planty' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'X|I|bY}ZVYI<2L`PuJ{S6uT@[{WoEtoWxpA3:){$rQ]0ad!Ss:`!}ePw]^ o{_!5' );
define( 'SECURE_AUTH_KEY',  'b`A7?sycaG:i0jk0LB%B,Pyj@o^hWqhl}KWyA(!9~}M`#DjfVhBbUJ@]jeYXMq5R' );
define( 'LOGGED_IN_KEY',    '*.V&m)zd8A`+}~0(24}sh,;T~^lv2e91lk70UeehWvoK{*}AY1cC[wmG<;B5Bu4K' );
define( 'NONCE_KEY',        'hkw2^fmt`a b?FH&`cf2Mp n(Earn@Fn)W=H%v.pdnj:(eH)*f4xrKi q<o{=Z]f' );
define( 'AUTH_SALT',        '1?hpR22n}#?_Ank7[7J2ar^Io,Y#`s|8K9+#LATs[ag/;y#-/w$9}^kp()56J<#!' );
define( 'SECURE_AUTH_SALT', '1;N51WRr_7*Sv!/O/k?g9&o*r`83FnFXt_,PED(~wlEH1|O9]e[?3pk)cT!T,}3L' );
define( 'LOGGED_IN_SALT',   '@$U6IXRohNk=>j)$e&52GwSn-SG;Q]h2WE8!J#P@jjHH!0GtE0fkmUyqpBb:(Zh8' );
define( 'NONCE_SALT',       'hzT9dOI4OO3$]-.NW0Ms?-S1K1?7%E/=ly.IO=ld3S>heX^eX8q,^hvKVJLEwoKP' );

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
