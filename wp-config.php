<?php
// BEGIN A2 CONFIG
define('DISALLOW_FILE_EDIT', true);
// END A2 CONFIG
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
define('DB_NAME', 'outboxin_obidb');

/** MySQL database username */
define('DB_USER', 'outboxin_obidb');

/** MySQL database password */
define('DB_PASSWORD', 'SA([J6PR57');

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
define('AUTH_KEY',         'p6txgawdmhrpyu74uyueqknyiz7lizu7rhcmjzj0sujczz0penkv4nrl4d1rxozx');
define('SECURE_AUTH_KEY',  'udaryamdejkutqgwt1eriyclj3mgzdjjdz2ucgnginxxhqq64jpns3mtduzc7mkj');
define('LOGGED_IN_KEY',    'dpz5iazbdkkxhwiz91l1yc4aahoa3aqmxaw4dcenfaftb5yncy0wtgngcsev9kux');
define('NONCE_KEY',        'ikc1rubvwtoxf1wqle4d1xggaq5uxomna7zhprdxcmzeiinyeqgp3fq7xgjzl1au');
define('AUTH_SALT',        'ivubh2y4rhq3whygylgkaczookbnpt0e3dy6vc7fxqti8vxbyon6lcubtvdxsuhl');
define('SECURE_AUTH_SALT', 'hpolccjm2lsya5a0hlrsplhyyunnddt7q5h48im9pjr2wmgekvra8yj1lhad6fim');
define('LOGGED_IN_SALT',   'evfplguvoyqxb1p8jyyu5k4xlwsskrdsidnjqsc4o3n5vah9pwq6ce1lin6xpjve');
define('NONCE_SALT',       'vnjwqenkgjtt9euhnsnmn47ueffff28f5kodsen14gs9jwgfrsjs9cartxsxdn3z');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'obi_';

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
