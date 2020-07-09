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

define ( ' WP_DEBUG', true);

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4kUG6Jo4pUBup1oMTQSmR2bk2R1kXXTinKJnLXtMVsagOrV0rNiVOznqgZIsP9hhaoGn1a5WcwL2fQduQL7JcQ==');
define('SECURE_AUTH_KEY',  'Xk2aGGMvSszaMwulxY5OhqYhaWjCM3IeRaF0/6Ic37BtiPD5anQ6gtQdZQrcVk2+nnJX8BKhug2LBjz9nUbQXg==');
define('LOGGED_IN_KEY',    'q1mbf3+N9/oWeDH0uGGg4kyrX5pAEqUbuAsyDz51pXklSWTFdR+t5OJM1u9ghvshgTaka7RY+UqtU78kUftJHA==');
define('NONCE_KEY',        'SZ/0padFac7VxJflSYWwg0+xzrwvJ26drn+NUchX6e98fgE9jKDIWffwUJZfj4Yg9hPQIVtV6wj7Ah7ZBSUL9A==');
define('AUTH_SALT',        'KXFMSwFtD/jzXFNdex9HhyGy2CXZgZ86YfM7p51g1ejeIFud3OeVxELcG4a0YoPRPba7YaaiPxVfbQDqUN1HAQ==');
define('SECURE_AUTH_SALT', 'pGAOLgj1w0Eq2ZNLDLeZHi46E6toD/g9zAS1Dgr+YSL2FboDRAw/ZEHNyX1d3yGpRWwc3mhTzYZGED9WB/Wd5w==');
define('LOGGED_IN_SALT',   'r8A/DB+HThzYphzsOvnZYVX/9NMpXQyB7XQA5M/fAj4E8rz6AWVKbjJzdlB4ng4t/BeEadHH6MHTuJSSIlNBbg==');
define('NONCE_SALT',       '8QJ4RYFANBYG1F+TlLbZ4C3ubMugjsSegpYDWhUyJqyhfqXxGsWCRsS2IfWwqw66d25Ivh93Afgpq+X+x55tOA==');

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