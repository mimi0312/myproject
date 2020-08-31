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
define('AUTH_KEY',         'luNiyL8gu/mMsYXeWTdO7RIYcaD9us6sNpb3yyt38df6drmIhGb1iTUb/2YnZnAoyOS8Z4ZOTQubFi82GEa5Jg==');
define('SECURE_AUTH_KEY',  'ndpS79suxIosD8sxzas9EF6KEKsYdeVTTGa0HqB7t8rXGKhoBZjNAxxb62S5T3yCp0GFVSQShBT/v89zs8/DRg==');
define('LOGGED_IN_KEY',    'w2rYkoMYfjmSuWAFQ3sZSig8ZZGk5DZSEY9G3MasbGSPuOfy5sXEOc3wAwiCvHrOYgk4xMpBiVa1fqINWvReCA==');
define('NONCE_KEY',        'DGr7JtW1lH2HUcPkghVrBW8rhfyHicZMYxaAOP6JskcqUu26EMRNvaGdAxU5pC3sPWsvB/b+I2kKdRm8tTFQmw==');
define('AUTH_SALT',        '1nlCTyg4c60SUizR2XfkfReX77E8GF8Ugif8rFeQBlEWnnXwFraptwxrRGEeSgqh6lpAE+W9kNZYmVW5yTYxuA==');
define('SECURE_AUTH_SALT', '91zl6PG0s6kg0GDbBSztA26zfXrkoSSsyYysuQiq1OEEdV1jC4o/RuJsldF9efJ3BusG8ldUxH33gtrpwuA29w==');
define('LOGGED_IN_SALT',   'jUn++BLDB1BHJgqh+MNNcxug1prgPj08TU7S9OamMOC5RyWtnDPFjxmnpnIJF4HGtiAf5q3c4mb7UBWYHjlJpw==');
define('NONCE_SALT',       'Q4F6ajVTSuWEu+CrnUbj1wXx/+H5MfTnJ2XnE9MF4Zs0SyhNkmz97pbld3YT2B6l4FFVFVkTZb4EaKgGdMEzjA==');

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
