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
define( 'DB_NAME', 'mysite4.rus' );

/** Database username */
define( 'DB_USER', 'adminPHOTO' );

/** Database password */
define( 'DB_PASSWORD', 'igor1808' );

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
define( 'AUTH_KEY',         'gTt3;6CW84MeYqo~_JZH~;lF*w(?e%v/L&npsFAi}haa(aRirC2R?ajRy~07y>T`' );
define( 'SECURE_AUTH_KEY',  '|GU?]}bNh@P&xPt# yD~rJtnA4gA;NXcl9=gt5?DfIw;FSK%|IfgVxSfLdt,Qddr' );
define( 'LOGGED_IN_KEY',    ']UAxyrOl@81!/1%;`SPVus}7:KgX]=7=uI7kFO$@ia-jU010qx/}HKq8Pl:)qPV&' );
define( 'NONCE_KEY',        '3,$3z2(~lJt5l*u.veJnPBnTiSPhJ%RZ_f,obb9L3kJHp;BLh)K@2q;w4s,NwFS{' );
define( 'AUTH_SALT',        '2DcLw*},Z7@x{_(B t^@|]b6`CP{~o<t&]e[H@)J5$1]vb_jh4Fwovtlb#;H_f}>' );
define( 'SECURE_AUTH_SALT', '_NM/z{LZBa,LGh!f7gC@c3B>ZE%//t_Mmw#3o1Zn1Wj?$}rc&vSCGHo#b5|n7NUo' );
define( 'LOGGED_IN_SALT',   'ObKr?RPbBWfx3S0,IRBM1x2#YQ;$W>n#PG=g.Y:yZkz9*bLyWj.KnU@V6s*zBK9U' );
define( 'NONCE_SALT',       'H3jsDXNa[kYh7iBZ(-Bd{s}py1YOvF@#O[vch39E?qZCy0D2p4EDFKN8.)(`JEt,' );

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
