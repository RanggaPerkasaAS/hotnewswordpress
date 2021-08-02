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
define('AUTH_KEY',         'NzJIik35IZqzu0FyDzSm6qIsfKQd3ihg2nsc0UAaLWPAy5uNv3dzqqaZknHO09wbKnjImeX6uYPX0TTXCIt5rw==');
define('SECURE_AUTH_KEY',  'nZIrGuyfPHEGH1KqIEuu7XVEFpaIWdlv2IfU78aM70zLzSFdmCaqXulN9p340vehAUebBfzqtTsPpxQd5V8jbQ==');
define('LOGGED_IN_KEY',    'QTJ36FtiE4j9bZF2V6XvWyw6GSw7iK2Sr2AASk5A0fGMZsNFzq513caQUUUPz8esAacXg2QTkCJWYrazLuEt7Q==');
define('NONCE_KEY',        'Fv6YRKSEwIj0OnGduNOXNCEWqmKCWX6xk670uUryNccjXdWRiLDbhO6A54uXfV7pN98RRAgeFiv04hhwjbddOg==');
define('AUTH_SALT',        'ICoZKNHFwtVfYix3pF6AS3BHrU8eQ+VMStGLndThFFg3wi9Ip84fXRCZPUnHfLYunyqmYaay1aErMkFfMdmybg==');
define('SECURE_AUTH_SALT', 'Msycbx33ZFFtSaviQ5dQ2Wnw1tuCO+amw8FYaouWav6L8oKTviMrH2hQG51E/P7Z593woA7BSNS6fnD2/BccIg==');
define('LOGGED_IN_SALT',   'CDEnhlMblHuoXn05j2XfnuG4MDepxoMhTqTzecT7F7HbeOzkEJHCncp84F0m8ouDOO+kMm9OUNpNxtVGT4nHPQ==');
define('NONCE_SALT',       'Iji+H9vgDbU4x2EK2GYyb8wxod/adznif6Vm/Q+HdK8+sEenNuFOv2X8hZ7YwVURN9+ks7IUAdexS4Xp9FT7dw==');

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
