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
define( 'DB_NAME', 'quyen_nightwatch' );

/** MySQL database username */
define( 'DB_USER', 'economic' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '192.168.189.127' );

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
define( 'AUTH_KEY',         'i*CTV>9-Qy;.fAYpJf8}huE}1<%dW~,GI`L[98@g8u}&3yv(Ad%nA%f^2~*N4w#~' );
define( 'SECURE_AUTH_KEY',  'tPwJ31:Z[!uwJz|Xd3HaW,}41(:<Q=|}r mU%8ETSnc-R&AO.&LOe/6H|aRqvqGt' );
define( 'LOGGED_IN_KEY',    'IBYaC:y*3-wa!hY-i6vl|P_OgRX!wX&HM0jjNtp>.jT o<w}Ur;b)c2EROUI^n3u' );
define( 'NONCE_KEY',        'jxie0~~J].3Lq.m&Ii#OIZCkQ5,(Sf@)v))gqsS_z  W|f<;03QBy.mO1$7la$$Y' );
define( 'AUTH_SALT',        '/>$vrw|cSdfPwXanU}+[,o9RP9hF:milxi1Zjz2<sm;en=&dd)2u+tO2(~[7$?fh' );
define( 'SECURE_AUTH_SALT', 'HD/C;eG!YA9+6}aZ}PnS KnRre%-xmVK#h<YBx}nf?5i)1Ajp^2I.Ul|TdCl-~bl' );
define( 'LOGGED_IN_SALT',   'VuG@]kb[/$E,wi]-|2km2mG^e{`1>uPa:},?e:6<O<_4Q taZCaxQ>!=?OitW9{F' );
define( 'NONCE_SALT',       '7WlIG}+2> z;%0q>D+2rp<{X4.?xM)6n2xntQ;^>_qNna]IK|^2_ D2aKr`0~+wE' );

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
