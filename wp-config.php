<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'buildyourself');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'koks20');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '9#m<+#Xg^}Cn_3vLWM!DZ&du=@gPrZ$:abokl^k@0,{AX@REN/ZWNw~B-KaCNcFd');
define('SECURE_AUTH_KEY',  'ok<B.H4QP!gn{< /HIW?|b<|-Xj/=)H.to]z7+Ofl]C7?nl<5o1I!mXayvK*.VJ`');
define('LOGGED_IN_KEY',    'v(>AFEVP}Wk6Fx:-w-D}S?AzqfbP9 rlcT b^UQ|<+L-mS+.3ro+kb{}PM%j1ebN');
define('NONCE_KEY',        'eN+P+TU$@y-o^OC02^[-UPTZy@#HZK`Y|*L2mrSJkI-1AH)?;xT8asWIkA;r;z7|');
define('AUTH_SALT',        'Oxx+ /a<oW<2ch6u2oL,(>+6<pOnDAK}kYRQcNe-gWRtGdx L<!g=D:F4NJ)K:&|');
define('SECURE_AUTH_SALT', '|jhGPqy|1K,|[j@;^Q<IP}4X5y|nf3Ir= S(Xr9OKUZc{7++--=G^w4-<q:Sn.Lt');
define('LOGGED_IN_SALT',   'asIg&+hH1G.p;KUMtkkV|E^lYJ%J& o2%6A>40i^%LLQHCqYPDp-<o@s?kA=x0!=');
define('NONCE_SALT',       'PXCdVg?6i=>Qx@FprsQ$OdsYDH]_$xPK#A^8zH6VG3(1/z3mjccv?u[fs7;XEF{p');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
