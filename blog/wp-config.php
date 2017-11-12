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
define('DB_NAME', 'i2152599_wp2');

/** MySQL database username */
define('DB_USER', 'i2152599_wp2');

/** MySQL database password */
define('DB_PASSWORD', 'A#*L84KXrPrnQ~BDAT.96*&2');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'jZxLg1VVOneFZsrgdzsE5eN4hxgXum3AaYCnRZA5MdMrAmMm3SRLAJ33fJLYDJr0');
define('SECURE_AUTH_KEY',  'hiBTy0Qy2tiVVhJpv9t2KJAo1PuoFFi7Kim5wINrPQE2wIJv9m7E3yul1f3mJTjV');
define('LOGGED_IN_KEY',    'ZXdtT3m7DiVOaGjnqbplehqaa6DZRg6DJkOTmpS9V3ro1aLF4orswZOAlVc93nHZ');
define('NONCE_KEY',        'AwFhFAcNfmEidC7eWbHxvA1vt8t4N55nZ60nrtRCEy6jZK5X6EIIAMZeervMSnzM');
define('AUTH_SALT',        'Y8CxDxMmQRVIfDLMDZInGk4eAbFbWFqrYJxUYc4VSz2MTnlcmmybsMpYXh1N02Kx');
define('SECURE_AUTH_SALT', 'TMq6hQhtTvjokgiEKQaTyB7LpW7VU9nuERsfiTKJnFIUU1ijUZmvm7Lw9E6rCdSh');
define('LOGGED_IN_SALT',   'xXgR5d6098rT4Ko3XtbH6A208TMuuolhfDFr4Mt4geJRp9oAX4OD3BK2CTMjNkus');
define('NONCE_SALT',       'DeMsut7qZBLIkGFpd9cI7ao1bY0cghm7gIq8FloZIZ3Em0jDb1kYzYGTEBxLm6XA');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
