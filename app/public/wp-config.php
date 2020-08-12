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
define('AUTH_KEY',         'LUq+ucvwB9T26VRlzYPmVHvnb6wetWvqj+2iS21/E5OrEouzRFTwSVZcy4ufnP0pRGRhrWUfPBBecuiNtLmgdQ==');
define('SECURE_AUTH_KEY',  '7wsUaB8yDK5kZbjrxTRa2yIIqKBkcWl168nv2LPYeJQpEzA6yomXAFZKHXY51JcENz8Pv4duLm4fKz+PFTwGZA==');
define('LOGGED_IN_KEY',    'ZYm4Bd2xhIog5HYoLLwVbvkaslH9C6rj3wFj0DAsIeLlnoYjI1yw7gFOLD3HsaprEyZPLEJ9vCaqE3tGE/P3IA==');
define('NONCE_KEY',        'vZozyDw/TMnU4oDEcOI8wn/VPKFqrGFZMlV1yyIVQxO74LU6GnqcKn0VcUf4qmmbevsQ0f9U4ly4OdlxymxaZA==');
define('AUTH_SALT',        'DsKbhgsHW1sB9U2NC/z4V6Hk14ad4NqWRGLRe4SKB8MBuGmOudpeB1RZ66YFg21tDdX7d5DGVYVA4FP45w/0Ow==');
define('SECURE_AUTH_SALT', 'THcseu+UlT7IGjzZTrRYARgCeEcf6txGLL2NWzODqLoKbdC8gXkuBn3xvO8Q5/uA4OhubZ35fTvi/Mhu6rdb3A==');
define('LOGGED_IN_SALT',   'JH1lsPOdMyw3rGFUd4Tbq907HsJBnXQOoG5m7/QfIM3f36/BDb6sTGobFQtIBaocu/IhVb3vhSEGZzLXIZ28wg==');
define('NONCE_SALT',       'oyhmwAM+hULuvu6eCnmTss7PujSl5OtbqdiIHdYSinWeDoKS/bt/zYxvLve1TO3w+1nT9A4ge99OplFyQ1JTsw==');

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
