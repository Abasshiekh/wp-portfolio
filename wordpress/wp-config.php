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
define( 'DB_NAME', 'wp_portfolio' );

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
define( 'AUTH_KEY',         'wc<p)({>D#ke-im|Bb1klvHj`I$4zB1b:_m{X>[b4Ft#n`=,!O~m@}Jis@NoONDK' );
define( 'SECURE_AUTH_KEY',  'ABj*&aJS_IfR=Z}^}~F9be)0 @9-jgAWQ#K>FYKb/p:~W1eB%Xugec_A87?D>Qyn' );
define( 'LOGGED_IN_KEY',    'lU;0SH*>7+[Q_;T8koq|TJ<O@V^%M7(QSCI{T}@N5/SucV{IDFz?vU@C_Xa<@+I5' );
define( 'NONCE_KEY',        '>O+z[#&D~,mQoGO&.o{I0|z10}MJ]zR5):,J.)[THK^5Wt.,lHH3WU }LE{bOw&j' );
define( 'AUTH_SALT',        '?%P;G2W<(poqY##wrxmwBTd$q~&Ddcl{G;^$]Sqz)ee+kT7YCY:yNv`V%p2#+R5U' );
define( 'SECURE_AUTH_SALT', 'i[_b~JuG%o7_.oQ8=}]$a_LE{MU,{LLUEV7G4i$zn3:&/M]K[0F}Bope9bcQBg,r' );
define( 'LOGGED_IN_SALT',   'cj1lkn0M5-hN>MONY=A>tc5)yn4H]pJnh#M)!vZ}_s8m5>Fun&q-uNy#*AApiL.2' );
define( 'NONCE_SALT',       'yE6kj?Ml42X[/~C)fHz7BWT<x+tN%IWss[1p?72+>7&]Di=YQIq}nN=vNGlD&^~.' );

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
