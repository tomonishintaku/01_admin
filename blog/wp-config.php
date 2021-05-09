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
define( 'DB_NAME', 's700f_n368547j' );

/** MySQL database username */
define( 'DB_USER', 's700f_7x3m655u' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Hondasu3_Hondasu3' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql29.conoha.ne.jp' );

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
define( 'AUTH_KEY',          '+s:Uo*t/iHZ!6Nadl:^Jh4H^@>x*d.+<kz1vE>bNoFs-NX_}wA,{^|1HIk1SPu&4' );
define( 'SECURE_AUTH_KEY',   'cltQTja_`S_m[mY4}95_bZLg]B=;[iq>9`17Wea6/BcqOqrn?r#0BMzSA>3C&S7%' );
define( 'LOGGED_IN_KEY',     'r^lJZpf{2RvSmv3PCkqFXLbnR%$D7pWK#.;|D]r:%a]UPGdw`%p,0)gn5qM>*9AJ' );
define( 'NONCE_KEY',         'a.RcA B.otcP;aJLko&lb@Y1cyGL(tu}E>&)7?_:4@Nvz4-N+^XP~1|pgH5FHRvL' );
define( 'AUTH_SALT',         'P6tuy_X$~j>,[U*1r1Q2d0#YWB;ZVC$foBSGzUKn+a*2W{ ~3?DtaecVui~~VTn;' );
define( 'SECURE_AUTH_SALT',  'T)OOS0J+V!5ge-J%53S P={w{!*?kwU?$N>s i@FToWuLLAM@6W^^x5vXjjMU/qV' );
define( 'LOGGED_IN_SALT',    'Ly.iKR9qey[z1,@T;1hL?1x[9K`b/:ymFtI*  ,b_Gy6oDgM&)4JSgbS)PfxAs$5' );
define( 'NONCE_SALT',        '2Dzr@$4IC+:edNU~U;fS[Wd0Hh8=*7U0Jx9ohcQ;,I,2K(~41G*?%h&Iz~@H>3^#' );
define( 'WP_CACHE_KEY_SALT', '4SmG7X{b1(Ot4`q+DX1-lU4k]I{ O`ULR~,vEemE%bKzWNXzjc0`s-qa2H/r1O&D' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === "https") {
    $_SERVER['HTTPS'] = 'on';
    define('FORCE_SSL_LOGIN', true);
    define('FORCE_SSL_ADMIN', true);
}




define( 'CW_DASHBOARD_PLUGIN_SID', 'HyI0hPTfN-z0LVsJG9qaSxJyJVgzDPvEu0Rum6TIQOBG0R1itJWoGx38YIyqSVfjnnaE1MT38hwko8YCqWO69fx4Yitzm1SnId2h656-IsU.' );
define( 'CW_DASHBOARD_PLUGIN_DID', 'e-vhwkMxUxyF1FXXam3jTq992v__ZpHojqagym5WDAk9fLyOHYxruzIX8eOTLUhiOGfJeaMQrjttn_MGSO31zv_Rfx0XTYXEIh7GT2CJ3VI.' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
