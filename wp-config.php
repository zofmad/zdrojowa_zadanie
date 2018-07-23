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
define('DB_NAME', 'zdrojowa_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '1FZ4G1?5 -lp&Ol_JJ--D;Xl:rU9k>S^[E?qs`=6RY@?8b;lg^$[Lf-+;G2#gmFZ');
define('SECURE_AUTH_KEY',  '(.;s)P:UP=!${+CR_maN&5+}h:a]e{!5p]r1Ej[IyMGzHCVNSQ`55tDx0xpqCs3l');
define('LOGGED_IN_KEY',    'T(h&ZGUCa](y!OH-%X,6L)?Q!6=JU 36j_NS[?3Fm<8D#.SEb%Ae#}1}KN#2iFZ3');
define('NONCE_KEY',        'scXUo&(HsQsu=&4Wk2;2$Y5=ZM{~9:Eo $ncFg@%^0t7/)#6_f`9/KFO{[Zg$No+');
define('AUTH_SALT',        ':`TTdsSH:uH;,<8+ -cf ,=)VIt:pgE@ceaXWGR[ykgD!j&3pCL[NqwMcgU$>>M*');
define('SECURE_AUTH_SALT', '`d[BI?bG-AlW3J^Ipg:Qjk~wQy[)P_B%Z_$wTm(0_@51%/EHU9snxQfH5+jm$bBi');
define('LOGGED_IN_SALT',   '0HMxpv*0H2:vb#z+h]IzVgbvQLcsc5^d-BCXGG+u b-BV~[wfBe$6e|GO(&AnJ#}');
define('NONCE_SALT',       'ygQXc~#h0npZ&a[P2fsDZTCGo)/HKb%H^aryfGfDgrX@2CF5XO@$[/@I}7/^&pHC');

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
