<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'adig2162_wp621' );

/** Database username */
define( 'DB_USER', 'adig2162_wp621' );

/** Database password */
define( 'DB_PASSWORD', '9Z4paS@@1z' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ggqdwfs1oiocuace2zcjmv2gbrhbrt5bpordi1hybo2jceojhoijvlpumkefzlil' );
define( 'SECURE_AUTH_KEY',  'wxafrzxvzm2l6mfqjyndfyqvx0dp2th2kdnuvwhtts7abkoswsjclpzgp3fifute' );
define( 'LOGGED_IN_KEY',    'puxmp75w8cj9uflqg2lrerol1poq7wuhvxfiyfubtu5tufajlaldg0gv8ecgzttg' );
define( 'NONCE_KEY',        'etnglxhgb7nphpysd8ogafghw0km4qgjtvtz3lw93az4hgqwksjaxce8cyi3wxzl' );
define( 'AUTH_SALT',        'xvfvgh6pdlzzx6jy0kjlq5lnhnxfhemsipstwop7amnkcpggm5vrxg7ggder1u32' );
define( 'SECURE_AUTH_SALT', 'v0tx6ydhr8xgdgadl4f7bn0ygw0t9qzroi1iguxsxapy7vdg8i2cpgagcu6ftu4a' );
define( 'LOGGED_IN_SALT',   'lkbkaij7qg327tzkllk71slkr9qluuzvmizmimb1gjxrj0crxnufqqdwr5kog6vk' );
define( 'NONCE_SALT',       'cku7lrsygwxoaqqropuynt3yjdheuevo0ffg90otfnwwy20qbmdlsb0rvhe21xew' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp7w_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
