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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'idris' );

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
define( 'AUTH_KEY',         '(/Ympa,z6^H67nW#H_.5:@Lmds>KW}(DTxx+%~^n2-y6Y8/[8T[G(!-e#S/bQpU3' );
define( 'SECURE_AUTH_KEY',  ':D*3fK7ED#Ppifhb)iMN_K9U~:q<_:q4$c%]19*+QIQvNTuIU2 Zz!!2twVDrGRR' );
define( 'LOGGED_IN_KEY',    '_Tbr*fi$V)PRPlYJ3uL)l$$aY2a883N2Fuc)H}-HCRrQ{[1V:k[J4I`u,D>n*o!`' );
define( 'NONCE_KEY',        'o6QbASsJH?B@uT>owK&:a>/|N()u;tlW9eh~fKcIr>2r)r-q.WC=cD ,(g) /^.)' );
define( 'AUTH_SALT',        'e60S_CCSCAv@uhe6-Jqx2MK,BZy.|Z)BIZ_vPh&V{b[snAO`<}LnXPU}aOLy%kmy' );
define( 'SECURE_AUTH_SALT', 'n)L363zb//Nw-;8Y}MAb.3dC<5-FL!5|k$12sWG~(<*L%*t14s+~&*Gnar5ByNH ' );
define( 'LOGGED_IN_SALT',   'x@.WLr,%Aq<NN2Lqp3!5SMEa7(5hRmvNP<nY@7b`q5PLab=K;zQ2pN<[!&Q=73gj' );
define( 'NONCE_SALT',       'l?M_Vr_`6^Udb_In-@@~sU^:<|@`Lw/ox:,coQnm,nXQt>T?2Vvoyo3*lxZ#G@oR' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
