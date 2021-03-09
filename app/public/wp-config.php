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
define('AUTH_KEY',         '1pjR/7w3marIjlwdfTtmeIrzFVW9FcpDkspFRHSnuLHqr7ek5/7WCEZvOGdN2VacRCMOv6L0n2uM679IhkyshA==');
define('SECURE_AUTH_KEY',  'hK/UrECFcbw5bEKmjShyVSQk/h4DVk2h0XZd77vKx2AqKEDVllkxEp/KTqzH0657rcJOULoe/Aj5tLD+gDFUQA==');
define('LOGGED_IN_KEY',    'FUvY7qBR9+PGWrpnV39jufyYbKw2fJ7soAFHJEzCzXytpLFLBAKupw3LnetdHTlGGfOksRDDBgCMA4+jCeUFww==');
define('NONCE_KEY',        'NH+X7bMEHEldzoBnvUTwgGU4OA73ivl0zhRZiZUjnkw39fT2z26xx0NOz1xrq6mJqTZ+A/vVfjJA9QUZ56zcXQ==');
define('AUTH_SALT',        'qC2cxDN+Aj4Qs2FkNf2M1nTGVQGTjbM90L4o5AJ53ody4OyzKJGYYZ8I2EXX1BDt6Ex65HSqgLhFYFc/6Ek0vw==');
define('SECURE_AUTH_SALT', 'QT1meN3qsmwvvTW1Wa2xLzBO4ZYDVsEq1meeZyymyfNGdhhoDmKgM4KXLZKkhH0hnvNf3EdadhmPDoXDwglpSw==');
define('LOGGED_IN_SALT',   'k7j5DiyLsAvaRRSO5i/FXehp03k86nRZvNjOXwCf5N3y4K1Xcdx3sj4GnhgFrEVbJA/hyNrrjTe00vM6vOAQbw==');
define('NONCE_SALT',       '8v3bWEa8xeNjHBkeEtsw7L6s0FD5BgvKfFIcfJRVdVCNWOF7fjpQQsv0Yxr9cV7/Cr5PDYwXSwJARAcjlSF2KA==');

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
