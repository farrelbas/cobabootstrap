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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         '28D4WyXt3li1U3futKJ9cG10Mo7NBegvMVIrMDt1WbI1U1BXCtHNhBtUUwNN+an0CL6BvEFonVc/F+xAKTi6rw==');
define('SECURE_AUTH_KEY',  'aV/gQffsUxt5OHcRWF4cKaAXg4PELtJbOFOuprVsDItUdt9zh3h+95IpnUBjn6wChGtGcWQPdu5l0WojiIpbSg==');
define('LOGGED_IN_KEY',    'PUO2714kvsUpfB47prh23XNk8GsyJl7kXY/oMtl0Z7/47zbfc0DC3bPT2AeMS7TW+ge8Ii2Lw2eFuSCMP4SLrA==');
define('NONCE_KEY',        'GoL5Glqj1ArSdxOt/r0e0pycR8tUsDlQpJH22Xl130JJY6EECr2sRUMqAMLt+M2o5bfee6F+pmb7lDUaP0YkCA==');
define('AUTH_SALT',        'wFxIGqgjqCPkhuvelXAhamFGvlx+qNZ3rUq10J6N83L3a/rd6DulVwN/jOUkj8qsRtHdbN0b+cYs+vWT1q89Mg==');
define('SECURE_AUTH_SALT', 'M+qzUH8Hk5TDN3bjPBb0VPznpKRQK7/6fQ+kTT9DV2obK657p64etTYB0W+UacK9uJLq7mGPSaezFiFjGCP/8A==');
define('LOGGED_IN_SALT',   'k3oz+WiSFZOuNL5ZO98LvXX985x9hHb/TBxugD22z0UhV/ecEGDAJSMP1/fAecrPgn+NriiIDjCE56CjdRcLIg==');
define('NONCE_SALT',       'sxIBHfrxZnCX6jnrArJFWZRFiZf2XIz4OlllCbUL6E02Dc1NooFZYokLcm2+FQife8AdfiLamI464izFW95Lzg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
