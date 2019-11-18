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
define( 'DB_NAME', getenv('MYSQL_DATABASE') );

/** MySQL database username */
define( 'DB_USER', getenv('MYSQL_USER') );

/** MySQL database password */
define( 'DB_PASSWORD', getenv('MYSQL_PASSWORD') );

/** MySQL hostname */
define( 'DB_HOST', getenv('MYSQL_HOST') );

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
define( 'AUTH_KEY',         '+n9Lf}%cHh_+k}Xdmm?o$|2,w{aq&DeBLweWu~Ae9G<E_GqiBTX|R*g?+9.fXvTS' );
define( 'SECURE_AUTH_KEY',  'gZ*+&5sN0c1h4kRe>*b cS-BI&m3 7OwoM-x|_nTRQda x;oNryF`bbzS6W_EiAN' );
define( 'LOGGED_IN_KEY',    '2CaSttd3xp;X:b4/s$oRQ|EN|XUNhRX#b-9O=v,l%rih(5t tEoPT1K$OMMTT@y^' );
define( 'NONCE_KEY',        '[V*B[c&gzk.I2Gs%#5IKHbEr$MIb1eD {W[hn&TXC2X!-|FPE;T_S:Mn6[ulglH|' );
define( 'AUTH_SALT',        '5,,*M~~5#{*-v^Xo6y~mx/JJ/3v5&*(ej#e~}Eic!)H~+}i;uU[b0>Xu6lvEv(P,' );
define( 'SECURE_AUTH_SALT', 'a wWvmfXKoqdlskLb%y:iTVa9l3P|4ct(c`66)0-7hD&?G(ROuU>lNVhx3f[dsNX' );
define( 'LOGGED_IN_SALT',   '&lx!W-!U^J.Vh|!f7eF&;@Ah-EK /MB)XJlM1hv:M!!`E>[4(qgUSO,9eX4{O-RQ' );
define( 'NONCE_SALT',       'e_4K8RbJ+}/?mJHoRty$2|A,$na!$Bwbw>sX#~GbK{{vd{G=6x104L9=wcbAC_jt' );

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
define( 'WP_DEBUG', boolval(getenv('WP_DEBUG')) );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
