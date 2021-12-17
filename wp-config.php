<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'gamespad' );

/** MySQL database username */
define( 'DB_USER', 'Diana' );

/** MySQL database password */
define( 'DB_PASSWORD', 'go@Wordpress!' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '/]QO=>ljTR$EX`HV,zm1a5@4Dtq@f<cc76o b4Ho*tKIF}@M[`5NaZ5{hu]UWMZg' );
define( 'SECURE_AUTH_KEY',  'w>KS-uu9HGKa84Eq;,I:pHq%@1Uvz]wLry}:n`_)z07#l+Sr{AC-}`D7yVcy0d(4' );
define( 'LOGGED_IN_KEY',    'N,M&6=-,z&IGW|Os,Dl%NaG?bT[NH*43um/-sOrAC[R$eQ?`qQSu]fEiSxtmwVHK' );
define( 'NONCE_KEY',        '$mI]yGvz.I]HkAY5q4E}Yh&h~r1!i;(+ku.&r(<)-?e_2R7VZo?y!_H~9?0z+LeC' );
define( 'AUTH_SALT',        '.3bg;R$q bEf`R-hE[gHS9X]b.(@x^,6YaaCK.~*C*@_I-Owj3+cqHTU5$ju06AJ' );
define( 'SECURE_AUTH_SALT', '{;/4E}wb*8NDxF$z@ZTKr I*+*l?4rMZ6yE.11fwUK*#AP:^0%X tSzO$`k9M7a<' );
define( 'LOGGED_IN_SALT',   'H)H3tKPjxFLQfMLC TnE9@r94R^ UH5PQ+?[C=uU4hRoY?5oce^Ln99]|/d64=gj' );
define( 'NONCE_SALT',       '*`4co.JeYC&okN9%jrFU=j)IWBb#l{5Dr%grBQ>p)ukHFF@~Q$1$ucfTM_OH(WE$' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
