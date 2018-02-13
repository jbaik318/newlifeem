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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '4e1$Q9<k(-m 3L0=Q!lD.R+pP3V,CVl5,0RVK*:~4G@&@%;A8*)IYA4-A U/u{s2');
define('SECURE_AUTH_KEY',  '{*wZ:Z2m&rKJ6w({|a6#<k2/wl+m<t1%HWW:~TKq8Wa2P5#|q4RaY4%SB96EyiI;');
define('LOGGED_IN_KEY',    'j0YBVq9rAI+|-0cE</nx7tgE7rc*?iz!1_ex,z?<i}4-zl?bV?Nx5T-aFL}e^aaR');
define('NONCE_KEY',        'v( ifCKXBIvo#GksF$/H}t;_JCa^OsK<1~doc5KGakuP>BWEZ4Q8Vl (L74I+w0&');
define('AUTH_SALT',        'B$C`@[*.MGS&b];=2PxP^c?vD1O7nLo<(3PLq~p%!k(+bQ8He%;rTv,X-$f_OOVK');
define('SECURE_AUTH_SALT', 'r~=i;8#eVJ$WvFRNHoW;h[K+u5*%{$a9%D`5.e_(tZuDGxeQ3+DN}0t!3Bojj.Z1');
define('LOGGED_IN_SALT',   'Nm(^w8G>6D.^YC/j!D49}q2ud)EKr1X+5CB1|z(t`uuv*O5|}Dmqbo#uxf1swR6!');
define('NONCE_SALT',       '(Gd`du/sv{@(z^b-Dd:.@&/ldVF7PXZ^LLcB%S@LhWLUX/~`?{4x3%N)T_Ov=/%;');

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
