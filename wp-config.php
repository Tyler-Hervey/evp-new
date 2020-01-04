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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'yed3NhfNiS6fKmUQg4bVi4S0K5Wj0KugO2UNtf5xFPL5d3X8TJu+daYiQrgacwzwvSYXHyKu+MEkXsnOkYB/AA==');
define('SECURE_AUTH_KEY',  'aIdpYgCvwOA+8YUMXW51n1YDlJLO/ndxk7J/DyceinPh9OpL9T6fbPy5+Rab22WBIxa3tkMEcP0G90L6tVOEkw==');
define('LOGGED_IN_KEY',    '23ogEVCowty0LETjfuurRfY8NYLRnssZZ41o96fetmXDfWMd36ZYw59q7o5sJ5QgsH07C8N3fimezmTRVcOYyg==');
define('NONCE_KEY',        'EWmrzDlc0f+VsAARXObfRcko0ithkwhGSteQtugMS+OKosnS6JZY4BbajnLkKW7C4Gy4Qwx+g1rDiOtils8otw==');
define('AUTH_SALT',        'YKVwTEHUsMzNO53vVVTsSzg7cr4Vqa9T7OVZ9Bl20RIXrAzP6MpWpAPA/9GZaUuPAR9VU5yGEyfg59O0tSxBkw==');
define('SECURE_AUTH_SALT', 'pKknwCGlDxWwB5fxy+uyps8AbtJsR08kgPqryEGd7Ace8FXfSUNmBV7DKdI1VnkyQ8VPibiqtiPKsBY70jJjwg==');
define('LOGGED_IN_SALT',   'tnbEX+P9+LMmarMdVFnR1wQJqs35kNymLEuxsnUTQSxy4Q0v26q/6Y5xPMZk/nUCGjca5D0DnMK6QZEBeRYTRg==');
define('NONCE_SALT',       'xNSmDq+9NP9ktWg4p6gcVadepPrzmrJiWRZisKnTv8M3A1idAfZqDuJGtpBxLiMnXdNqqlf3eDRSup9MErkTPA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
