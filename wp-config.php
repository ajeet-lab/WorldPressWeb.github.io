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
define( 'DB_NAME', 'ajeet' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '3,D85@6k%V& fp}[r6yNee_&FW9jWp,0 J;?M.N4A!{b3YT*{~=y[[B+JG4X%!Q7' );
define( 'SECURE_AUTH_KEY',  '.|Q-DU7Mkts<A5HC!kr?MF%+JPPebvUu?+nDB{LaROI`Q9e&=Yd3x5J^s>*:>l:E' );
define( 'LOGGED_IN_KEY',    '-)$/:qM(3#dYXgSf!$f:HaON>_^!)F@~0zS%YD}1`*b]Wzo8F}DPu_+]IfAgmhPI' );
define( 'NONCE_KEY',        'K<FAc(s33nF<mi@2@?#<N>LD*,uc 4/7@U?7VPHG/GmYvCLB|<c|8Z]4BvPsfXeJ' );
define( 'AUTH_SALT',        'A,Ml,ZWM`[!u]hKOt24:Hmo/Y?&bZ*,Zpwt4,LQ5g+6i&9igCA9wOXEkLEBEW2%1' );
define( 'SECURE_AUTH_SALT', '_^?q?HdktY/S1Fc2uFb~lOd_o{3nWm$DzI!*jB$U}@?a#~{?z[A`4N$+%>zx*teg' );
define( 'LOGGED_IN_SALT',   'azA8/F0QL%O|MoY@$^nP E]PByfG[|]olJjUGTQgf/l>MB{& 8m%mSt[,7>umr?q' );
define( 'NONCE_SALT',       'He4}YiBxGV]-5~n^ND8e1$SP5l0I-;,iz0Qm4eG*;|m,FEV(VAJYu%0+|YES}]i.' );

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
