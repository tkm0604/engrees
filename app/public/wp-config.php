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
define('AUTH_KEY',         'sLmuDxH6s9NN1pGJlu/LE/MBZiTxNJLw+wC2+Ti9s+Dw2GAOskYlOTdIPMknK3IwPYSgmLcanWy/vr4oNYp+2w==');
define('SECURE_AUTH_KEY',  'grPOX93s1yZpUjNoDryBWYLe4gEBpGu/SUOT+IMgnj6tKEq6tMjxWdjO6e8KLwrm/HY5pKbYCnUmI1SEn73/mA==');
define('LOGGED_IN_KEY',    'mP138c1aBByjlqnGhZtu0g1i+Z9fDJopyOUPu7cjcPhfuiQf4DMfTsL7NJoM9utZFxUbdVzVP8N8SA2OqY3eSw==');
define('NONCE_KEY',        'zzZ7kkmX7hoCewdU+1QbytYUYM9n9icYVSaxcGA/8QbYK+TFw6AvlfuKz/WXVVn0kPDSiuj5IzbKjKLpsYLYyQ==');
define('AUTH_SALT',        'kQ9ZTaaek9e+V6B/IW/TXnK6X9X674rK88O03ejUuvb7cydOJqRBNNMDIBLrqAYIY89tfyOmkVbk+cvfwVe8OA==');
define('SECURE_AUTH_SALT', '31TfiIDNIh3vTCA2Paql7mD/ZI7GcchD2+61WoYvi/k2/E2K9akfBVIXHnjC3ckYyg5/0HwfEnhYSa+gBotRmw==');
define('LOGGED_IN_SALT',   'x0LJbJ4Wb1pXPKhYf8CUZ5h763IjsfP1Sl6DC3VxyjPg3axMQAnoujIoufX3r+99pF8cKn27AMV2n2KX522Miw==');
define('NONCE_SALT',       'jZyw/aLcsaIDisGkJezIf5w6SOMi8q+u8xiv1WF2/JcaIGLmf6ncddDy0uFGINmB7Yl1XcSYyQlGvF/hOwsNkw==');

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
