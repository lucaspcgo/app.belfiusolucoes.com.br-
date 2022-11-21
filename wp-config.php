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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'belfiu90_wp590' );

/** MySQL database username */
define( 'DB_USER', 'belfiu90_wp590' );

/** MySQL database password */
define( 'DB_PASSWORD', '37pB!8Sm.9' );

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
define( 'AUTH_KEY',         'ibaoeejurivqbivdawshrro3gbwlfkosswbwunmhddh5s7qaok28bg92zf4q6emk' );
define( 'SECURE_AUTH_KEY',  'wuylakxobjlvovmsp4gpnclj1zottdxlc3cisao83whjwf4jpap8rt89gtf9xvbv' );
define( 'LOGGED_IN_KEY',    's4kqjfxxep44aoaxqyhrwdxlbtj9fah4ctezr8xpwxp4ohvhdymspbzhre7kuqrl' );
define( 'NONCE_KEY',        'xozq5kgvh421qncj5dkh64iyg4u6cqa4ep6wldu0lhq5rbmumtwdrzmllxahl5or' );
define( 'AUTH_SALT',        'g6jyrmjnycufwptjosgrttnpzbft9ujshkv7sycz7ucdu2aus3aaqtfvyriurfeb' );
define( 'SECURE_AUTH_SALT', '48ouh7li51tele1ua7jfiosherey5pbgrdmjnhcf64wjrzssd8rxgpna6kyrhfb5' );
define( 'LOGGED_IN_SALT',   'xy5qz02nph0l6qnzbkvjuux4tx0grvlmawb6chdbf2faphto4rb3ef8bbolmavhv' );
define( 'NONCE_SALT',       '9gyv5vlritpkdacsfqczj9hjrjkzsfssc1qmvntxgmhfgghyv70emrjllaa4qmm0' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpxl_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
