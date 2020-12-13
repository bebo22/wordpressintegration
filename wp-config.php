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
//define('DB_NAME', '');
//
///** MySQL database username */
//define('DB_USER', 'root');
//
///** MySQL database password */
//define('DB_PASSWORD', 'root');
//
///** MySQL hostname */
//define('DB_HOST', 'localhost');
//
///** Database Charset to use in creating database tables. */
//define('DB_CHARSET', 'utf8');
//
///** The Database Collate type. Don't change this if in doubt. */
//define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[ 8f*:?x#`*^NeI<SJ:A|t%`k{@FW%T*v24ZD#ox#8e}1? m)=nxqhc,duqfY0Y0' );
define( 'SECURE_AUTH_KEY',  '1_z*(5F!h#F%9NwUj>ay.>rsB{OtxH}xzkXy$xSb&&QB)1^&aE-r.MNQ40P`cLSY' );
define( 'LOGGED_IN_KEY',    'M%Oq$y%tFKNShz9)=:gYaHE1][9?ggYlHy%A<@]Oi,LJ2uIPiavXztde#UDq74B{' );
define( 'NONCE_KEY',        ':3jlZM=Vd94g)}yfj{vr~KCZ_|hUbVrF]9[[r^kRDjeiW$-*11oP8X&]i9|&&s#E' );
define( 'AUTH_SALT',        'Ce q1kS`%~H1sC_`lp.:M6 9YtSLrY+(XYj6#SwJ*e%q*@:8H(+t|SYB4>aFIXYC' );
define( 'SECURE_AUTH_SALT', ')A6yDEyXpA%]C&&<%*UV:BuDpvhwo1DQ*N%+FEDg^7 aj/?EdX#?J|3lg?JL<. p' );
define( 'LOGGED_IN_SALT',   '>Q.-hPz?hMt)DT2L#tVYM@GXttMU_)L4O -DtWa(@)yqbwN?mW$|)6$pef2L:D`c' );
define( 'NONCE_SALT',       '`21F<9 ~nQ[s!o3FlR6#]oQ.ZfP)GqzeC{XyR%BcY.L*.F9W4E/t-gFe#O<0HsQ8' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '_wp';

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

if (file_exists(dirname( __FILE__ ) . '/wp-config-local.php')) {
  include dirname( __FILE__ ) . '/wp-config-local.php';
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
