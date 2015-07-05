<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bitnami_wordpress');

/** MySQL database username */
define('DB_USER', 'bn_wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'f413492e29');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         'ab707545e8d199f46f293bb9af2c9d251a4ad85c229772be8579a69a1149951d');
define('SECURE_AUTH_KEY',  '1fd6a65afa6c64b0a1df88e7e4ba92852db43d329c0c5f6d2f5f97ee653ddd6b');
define('LOGGED_IN_KEY',    'b4e7e4ec2c965b912cdfdf58d66e24812995f4d84f829330365ef091aecf5398');
define('NONCE_KEY',        '3b1c5195adc32f8c168d06b9db877c84c38dd959c13727eb9f3a1489258a2377');
define('AUTH_SALT',        'cdad5c2fd351f0221674b16ecee827dd433846e24508e52147cc06c75c8691cd');
define('SECURE_AUTH_SALT', '77aeaefcdbbd378ccf5f9af6dbd90162c449660e2c8005bf8224b99a4e901be6');
define('LOGGED_IN_SALT',   'f952565987ce55d12f15907c77533295b73c23bdf68330088b0fbd59d2943af3');
define('NONCE_SALT',       'd2b5e4b955576a70a55b329e36f9ed7b1fea7ac4e744e292bd3c733b47fc7955');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
*/

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_TEMP_DIR', '/home/gianni/wordpress-4.2.2-1/apps/wordpress/tmp');

