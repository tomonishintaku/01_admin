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
define( 'DB_NAME', 's700f_xk6575ec' );

/** MySQL database username */
define( 'DB_USER', 's700f_senkn34h' );

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
define( 'AUTH_KEY',          'Bo$;K/U{rSNP}nQ&Hs<SYqv0qYkK%JuwR-=0KZxcaWq<3!sTckvt!f4^c}cUFU3}' );
define( 'SECURE_AUTH_KEY',   'i_B+,*Ib !W1gT:9F?cFzC/&3ERdQZjwE}#&Ni<)O[y2Pm4O9gO>k]gpF<Q8n@@V' );
define( 'LOGGED_IN_KEY',     'N>g61t}kv>=NWiRYC}G:m:tj(5E?cEG,*p~P?0`-o]rvcXaztn>o^sVPVwzV|-S@' );
define( 'NONCE_KEY',         ' On29R<,d{0!f|i.0EB$2SV%qW$qP^X-J^]>kB$kij-O8s%!1SpQBFHg#<|D9T9&' );
define( 'AUTH_SALT',         'YiTe<nF~V 7w,b&|Us+oj%p*HWaO[ ZEc=*OX|^WavN.L7h?a(&[+0FeAak<?Zr-' );
define( 'SECURE_AUTH_SALT',  '</y97W`5Uv$ VU%0y%:0}t<Qel+9zg3FxPqRw2e3-Qdnu>-foXs.SiV,5hMQ<=KR' );
define( 'LOGGED_IN_SALT',    'Zl^r)7UrM!Zs/CQ]|P4<oXg6eCOt8)v^aMHMO*C>]Sne7%qo$SOUOwy? ]_S_,)X' );
define( 'NONCE_SALT',        '2(bzB#O~J[I%Qj^/ZF%{4OyRS(-`at)xFY<1C$S}-dOT4P9Q)]cV>b,nk#TtkjDX' );
define( 'WP_CACHE_KEY_SALT', '|n4wr9xrlk9)MmeOD}^={Nd2U%+>(0$[T&vMfOsQ3gZf{Gu/&?Mshy:AU0BJW~xr' );

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




define( 'CW_DASHBOARD_PLUGIN_SID', 'XuaH34XaTM7nSRvZ3XeUBuDQz2QSb2zCcP0N5zuXHEvySizm1zFOGtf_R2xG7oWuOy1hUuq7Ozx5iXn__0jL5vOdiRK8NMBZyi4WSogD2MM.' );
define( 'CW_DASHBOARD_PLUGIN_DID', 'eFqkgwC0m3LqOee3gdKuuqZitMw1JOGypfP2R9Hnda438b_cJeqXymzKe5lsL5KDdAfRp0wQFVecz10MWDv7VT6CajRsxq3RJxCwJRhUJxI.' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
