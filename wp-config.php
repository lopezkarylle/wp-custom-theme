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
define( 'DB_NAME', 'custom_theme' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'EDDUW|s!t4dBPl3DsX<G,4fzm9A=|TnpxdmuRO7,CEzX,|X;oP)0@=zFU9pKqw}s' );
define( 'SECURE_AUTH_KEY',  'OK*yYG ,p8C9kjc0#.e6t^66kO7C)SB$EoU*/1C4T9M!_R2n4]D}p&IVbZ(1|S3u' );
define( 'LOGGED_IN_KEY',    'x7{s,A>m4pEN6>MKm*oy@;eE 2N@$F I#KiM0J*;>:G8N718F#>NaNLMot%*5$My' );
define( 'NONCE_KEY',        ',K3IK6j|NWGE$H|#<b*MOJ6+A3FZqF$-9z%yV>LE08[j9Qb95}zCxQ{HF?|@J#s]' );
define( 'AUTH_SALT',        '_#>2%pRUIIY9<DrwA`j8gnsbU $R,z*)/}MX(j;5bMh4YxM*k,Qx@nkX!|r-Vf7@' );
define( 'SECURE_AUTH_SALT', ' K11LOL<H^8>zKV1VFG>$RB7?GW+x_`0e)SOTfSAF/TvLw_z#y83.XVhlO6CuR3n' );
define( 'LOGGED_IN_SALT',   'fAp-F!MkmvTwRA~UYsy~l D]Oz`n,r{u. LhJ#G _3,}^uha<;N@tpAj{@_PmKbk' );
define( 'NONCE_SALT',       '}}o*~Zp.[w$+Shwp}O(*P&6tw0rrC.32rFD8 Q^.:h-ibsNhzD9IN|WD|N5/^6^K' );

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
