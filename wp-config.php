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
define( 'DB_NAME', 'i5592743_wp2' );

/** MySQL database username */
define( 'DB_USER', 'i5592743_wp2' );

/** MySQL database password */
define( 'DB_PASSWORD', 'L.xuRGy4QuU7kjvXSsI03' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'EAgSU031tynQBhyU4rVhWVAGKoTJrmZPEfvMLh8h7Vvmb49cSxRrpicPwBOh1fTs');
define('SECURE_AUTH_KEY',  'lis4tjDByLG5zqd3blYqdTh5r2lUSlUyX5d92SaEugsdjeFg5xaUjYe1vY7oZOIY');
define('LOGGED_IN_KEY',    'Q63l9jXPxm7IZccHTUgZMuvenVj7keNkhC3yX0GhuJP8PQjveaHYy2IiTp1X7HpB');
define('NONCE_KEY',        'wCfcrqZtKbLz2wTttpiXLtMUD34smDdOExHNcFaFJpCLAT3L1p2bEAjLWLVTlRpL');
define('AUTH_SALT',        'Nk6YRDImXFvbeW58ILm2psLwU9OoPyaYL5diAQEe1HOSRCGDj3SDBQpQS7me0u4i');
define('SECURE_AUTH_SALT', '77hhkRB41ZBzTvOrIHBbidD0zW8ps5umCOX3QObv8uI12wtXBA6fPCb0UO67Z6Am');
define('LOGGED_IN_SALT',   'APpCGmD9Z1GJkAYkd30MS76z2vLl3A9zdRV6uzGcWHUOOmVf9cOY2w68lQTe13A1');
define('NONCE_SALT',       'YjugZitJjF2GlVsaqARPAXGh6G4bNxuA5PdfbGuhUr5b2IWS1PUyyvTsfs078dZW');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
