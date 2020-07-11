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
define( 'DB_NAME', 'continue' );

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
define( 'AUTH_KEY',         '1#0cSAx-sE}Rd`gdq7O9=w-@T]9<i~$jWo&|m/g-X{Y`1V|5K?1%zjR*>; n] ON' );
define( 'SECURE_AUTH_KEY',  '$$%IK?7P7s}/|{n&N>C_Ck([NZv5]7<e%-C^Ip-hgJdI5N=-~XkCEKCp?*(7XvpQ' );
define( 'LOGGED_IN_KEY',    '#CN1?IrmQ;zp{Q^pb}nAmUu7G>y+z?K!CE~Y@V]z(a3,~!CKnuH?^Hnv#kA:}`op' );
define( 'NONCE_KEY',        '<_-9TxPN~bsTu 1D6YiXQlP<AD.;28!10pC#;G+VltTz#SRlxfoi.N/rQ_Kcg!u;' );
define( 'AUTH_SALT',        'K;pNVl2cQAf.~O0X&Wd;XYxMa4`;]XnRJ_qRf4XZGAH~46o[eiJIS-k~n*uE&&TF' );
define( 'SECURE_AUTH_SALT', '10~u{j*5D2#YqF{E`kVJ$5;m)L%E$3W(M_OMbN:sFy*+PZc%6]ySfY^v_*ioA6*7' );
define( 'LOGGED_IN_SALT',   '*~.%TjXn#jE>/cE`AL[o}5YJs=f#ezk;n]KD0z0eLp-War?6Da-:fh.g@rAupFM$' );
define( 'NONCE_SALT',       'MDWzGD)=#ycRpI$=[7GbrdNMJ>{4n&?-j=*[xQiW~IIL[aYz>gSS!.2c*ZQn[6N8' );

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
