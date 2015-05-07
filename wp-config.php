<?php
/**
 * SET UP ENVIRONMENTS
 */
if ($_SERVER["HTTP_HOST"] === 'example.gotdns.com') {

    define('WP_ENV', 'development');

} else if ($_SERVER["HTTP_HOST"] === 'dev.example.com') {

    define('WP_ENV', 'staging');

} else {

    define('WP_ENV', 'production');

}

/**
 * ENVIRONMENT CONFIGURATIONS
 */
if (WP_ENV === 'development') {

    // Site URLs
    define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp');
    define('WP_HOME', 'http://' . $_SERVER['SERVER_NAME']);

    // Database
    define('DB_NAME', 'dev_db_name');
    define('DB_USER', 'dev_db_user');
    define('DB_PASSWORD', 'dev_db_password');
    define('DB_HOST', 'localhost');

    // Debugging
    define('WP_DEBUG', true);
    define('SAVEQUERIES', true);
    define('WP_DEBUG_DISPLAY', false);
    @ini_set('display_errors', 0);

    // Disable WordPress automatic updates
    define('AUTOMATIC_UPDATER_DISABLED', true);

} else if (WP_ENV === 'staging') {

    // Site URLs
    define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp');
    define('WP_HOME', 'http://' . $_SERVER['SERVER_NAME']);

    // Database
    define('DB_NAME', 'dev_db_name');
    define('DB_USER', 'dev_db_user');
    define('DB_PASSWORD', 'dev_db_password');
    define('DB_HOST', 'localhost');

    // Debugging
    define('WP_DEBUG', true);
    define('SAVEQUERIES', true);
    define('WP_DEBUG_DISPLAY', false);
    @ini_set('display_errors', 0);

    // Disable WordPress automatic updates
    define('AUTOMATIC_UPDATER_DISABLED', true);

} else {

    // Site URLs
    define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp');
    define('WP_HOME', 'http://' . $_SERVER['SERVER_NAME']);

    // Database
    define('DB_NAME', 'prod_db_name');
    define('DB_USER', 'prod_db_user');
    define('DB_PASSWORD', 'prod_db_password');
    define('DB_HOST', 'localhost');

    // Disable Debugging
    define('WP_DEBUG', false);

    // Prevent PHP errors from displaying
    error_reporting(0);
    @ini_set('display_errors', 0);

    // Enable minor and major WordPress automatic updates
    define('WP_AUTO_UPDATE_CORE', true);

}


/**
 * CONTENT DIRECTORY
 */
define('WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-content');


/**
 * CHARSET, ETC.
 */
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');


/**
 * AUTHENTICATION KEYS AND SALTS
 *
 * Generate these in production
 * https://api.wordpress.org/secret-key/1.1/salt
 */
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');


/**
 * DATABASE TABLE PREFIX
 *
 * Before installation, change to a random string
 * https://passwd.me/api/1.0/get_password.txt
 */
$table_prefix  = 'wp_';


/**
 * SECURITY AND PERFORMANCE
 */

// Disable backend file editor
define('DISALLOW_FILE_EDIT', true);

// Automatically empty trashes
define('EMPTY_TRASH_DAYS', 30);

// Restrict number of revisions kept
define('WP_POST_REVISIONS', 3);

/**
 * That's all, stop editing!
 */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/wp/');
require_once(ABSPATH . 'wp-settings.php');