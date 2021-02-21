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
define( 'DB_NAME', '' );

/** MySQL database username */
define( 'DB_USER', '' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         'nsb9dqmemunilnigjed9jbv6ziaydzvhnuvouqont9d27vnaadk2zwdrrdrh2icw' );
define( 'SECURE_AUTH_KEY',  'oe0krg45hkbyfpyntgqnmzrambwdqzzznjajvkkcfbzqzldimmjwpocwxxf6ipif' );
define( 'LOGGED_IN_KEY',    'ekb0ywzpnfbd1ragxulahxfayyclkhqgmpmirmfa8ctucluhvzk2oucpc1qrrtlb' );
define( 'NONCE_KEY',        'rf9wchfhrttz4jaxzexjpggtczdfgmp4rafa3bpuoihetmgkrkrntlsksal70kxd' );
define( 'AUTH_SALT',        'mku7dhurmd8qxcjhvh7nkskvinswgbq1lxhtdiojvzyqtgjcnayc8uwgkywakkre' );
define( 'SECURE_AUTH_SALT', 't2ilzufaorf8wuzkuoqd1jhqfq0txnkgtz2tbrn4rvbvrkqbmnuji2wnfi4zjsy7' );
define( 'LOGGED_IN_SALT',   '7u7ijqa1q0qcyul0nahxlubxeflaar8pbegmgx02cvxiahhynjgubfadxptljqno' );
define( 'NONCE_SALT',       'orfrssc4vm2iruqsfwoymbaebpxx9rgzchu6hf2iikgovkegxvghn0eqzptuoajy' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp11_';

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
