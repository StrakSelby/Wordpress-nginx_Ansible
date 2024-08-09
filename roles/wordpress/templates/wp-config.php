<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
define('DB_NAME', '{{ wp_db_name }}');

/** MySQL database username */
define('DB_USER', '{{ wp_db_user }}');

/** MySQL database password */
define('DB_PASSWORD', '{{ wp_db_password }}');

define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 */
define('AUTH_KEY', 'your_auth_key');
define('SECURE_AUTH_KEY', 'your_secure_auth_key');
define('LOGGED_IN_KEY', 'your_logged_in_key');
define('NONCE_KEY', 'your_nonce_key');
define('AUTH_SALT', 'your_auth_salt');
define('SECURE_AUTH_SALT', 'your_secure_auth_salt');
define('LOGGED_IN_SALT', 'your_logged_in_salt');
define('NONCE_SALT', 'your_nonce_salt');

/**#@-*/

$table_prefix  = 'wp_';

define('WPLANG', '');
define('WP_DEBUG', false);

/** Disable Automatic Updates Completely */
define( 'AUTOMATIC_UPDATER_DISABLED', true ); // Replace with true or false

/** Define AUTOMATIC Updates for Components. */
define( 'WP_AUTO_UPDATE_CORE', 'minor' ); // Replace with 'minor', 'no', or 'all'

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
