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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home2/virtualcweb/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'virtualc_website');

/** MySQL database username */
define('DB_USER', 'virtualc_website');

/** MySQL database password */
define('DB_PASSWORD', 'Ebix!UD8D5HD');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ',1o,|:2#=1,9g>+J[E.#&<(ybmZjQCBX?$yeopC#ix)J6$VS}unU/t#Rd~)/K|Y$');
define('SECURE_AUTH_KEY',  'nrJlNo2-]Y+hksO7(RpuwEo(!o|G@V/P>RR+}oGhB=ai<[$a3nv^3l;yDZZ((-<j');
define('LOGGED_IN_KEY',    'E6&ILJt-5`30`OsDc_ovj/fe(Z OJ(!at/oo*A&on=JE}{Wr<DH)G0Ucxf^,2rx)');
define('NONCE_KEY',        'u10mgbENp]L4`en7)-,zn7?!5On8!GHfd~)*oL[/iD-t!<o~]zqCXAz+lbt^*}KV');
define('AUTH_SALT',        'du!Y30Ht*-SG1]rnmDZ><IXi8FXSH[[Z-in#Yx*AtJ_p2f[CZmN:3|+73[f_:s6$');
define('SECURE_AUTH_SALT', '+9m^[n-BB_`/GBY(g3CPWob>+_%n1/qgrd%RKiraq)}NUPi}bkvg8mvb]g~Q$yRq');
define('LOGGED_IN_SALT',   ':VYvW[he(zr~-)~B3qf06aw|]zzJ;Bo:>bP(_*H~2zA@|!=a+|gYN)gE|}&j+_i{');
define('NONCE_SALT',       '|;sgfA{SleF@7e^L sC]qF`z5X0heCH:.48+oAFC )JLafS`/g60Q-ooa-*V/wC{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');