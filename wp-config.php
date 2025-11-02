<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
define( 'DB_NAME', 'stemmiac_wx152' );

/** Database username */
define( 'DB_USER', 'stemmiac_wx152' );

/** Database password */
define( 'DB_PASSWORD', '8-Z6[SS3p9' );

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
define( 'AUTH_KEY',         'k3nvrxcrqbrttht1l2kieyncxlcxn0s7ehwuqursdgmr8hzu0vfmlgxfabq5eu8e' );
define( 'SECURE_AUTH_KEY',  'g75u93colkzndo90awqfjuafkcfjcyqaa0uzkstemoj47nak10lq0h5e8amwdq8q' );
define( 'LOGGED_IN_KEY',    'zhd1m3odwb6mufwru0o3lsjmsq82r9fkk88euelidhrbo3eqhlitkzxb1krxt1zw' );
define( 'NONCE_KEY',        'hbnpn3ekhkdrn1e0hpnbnsluz8ry6me88cwsk22yhjznvi5mtibd9tdbvxmelqqa' );
define( 'AUTH_SALT',        'tqoy89szjt4ppwlzhplr0nx5enzd60xs6n6zs9o9v3irjorl0tdipvcl6zxdyoiv' );
define( 'SECURE_AUTH_SALT', 'ofbgrwmxbcpgtnumkra4zcwq4o1fzpmnfpibsu1a0mpzxy48mnft0j1atpohzpl3' );
define( 'LOGGED_IN_SALT',   'tpynnxic8fnnehl8v5wddacgkmzjquybslb6zuhe1ksxnq7g2a9wq2ymiezkzudf' );
define( 'NONCE_SALT',       'dlptis90nimij5wa3zbcq2pbmq7h1ixqlzoxsyodwyuhjwq7l9b2mosciqjcq2tx' );

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
$table_prefix = 'wpah_';

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
