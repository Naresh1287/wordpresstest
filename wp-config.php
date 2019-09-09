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
define( 'DB_NAME', 'test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'naresh' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'o]Hz@u0hYG_:5Ta.)](DMcIk!P-0D5SkP<]GNydkl2nF& QYl|g*)(7<Vj9^Th9G' );
define( 'SECURE_AUTH_KEY',  'iI!)5V|k,;17[ABwI9/JQBOL@-sEbODL4bJ[o|p0CdCci_O)D#~}gr{}Q-:d~~=o' );
define( 'LOGGED_IN_KEY',    '0*MW7mxb>>RcD/Tu<qno&nzdaN{?fC,/:BqbD~RsLPYYFe;4?h>NRJ^miuv15C!e' );
define( 'NONCE_KEY',        'g=[/L~#fmuxPX=$R,]!K2$S,K1l{M).a[0Y?S8.N=#*7DR6ax-Pp@Gc@IrtWK,XX' );
define( 'AUTH_SALT',        'A{&%Rl5T%tzPIz^ZnH84D79}EcQFFEP%9lL?HB;dA U[k2Z?!?<*K0_F*:[/,U}%' );
define( 'SECURE_AUTH_SALT', 'Iz)$[|lV8-3%Rl|U#ebJ,j^l=r2s6UZrR)2UqeVXO-,,JAMY5|O2Q^[b;lYC;8P=' );
define( 'LOGGED_IN_SALT',   ':@D/G!s_t8]ngnqNywBNi{;1e@9@--B;S)$ds+=f[_i>7WHtY%IEJ!:7[/gcT%Bc' );
define( 'NONCE_SALT',       '^U1ZBLVn64wViZ-%JCG=QW#&EI2Au5rS-a<J{y5?k^./s//{)kj{H,DqS<skwP?r' );

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
