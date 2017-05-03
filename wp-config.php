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
define('DB_NAME', 'gdpn');

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
define('AUTH_KEY',         '+<N.G*4$WVE/Un8*#3]6Vet-LS5hnMgU#xaToh$2QBSq{~v**T=W6afm]}J_2T#N');
define('SECURE_AUTH_KEY',  'THM9slhPngXRWN%6s=&Yf<vgO-.HF.5#!yYS% 43W?UoFL7,k%ZDaLD+o-:q+fbY');
define('LOGGED_IN_KEY',    'jXrc-ZsLhI)8VBcA[T*/!HW WLk-EVa3mo}F[P*`vwv<_v/*%~l12Jh:FtH83rtW');
define('NONCE_KEY',        't3UkZoQ|2K3Kx9{lUqOw<X!>bkWt`c5M7gQ+VlPK%r[Qq]},#jhKc0?^ocGvi:N:');
define('AUTH_SALT',        'w`xR:eW0FK6fEf3n!M0<B:$AsIS<r_#qe+ Q[(ZkFgFi{/E4Ev=*NUQSiLc+g%J3');
define('SECURE_AUTH_SALT', '+|j!CdMm65X)MkxA0CW1q35K7q,<Fs|Z!u+qhn0C0,F)l`xVAjNFp4Iw/ueND@(.');
define('LOGGED_IN_SALT',   'Bsv@/aW:k!>^PRD57onH$t.DidF~sWthF]e~5]CA%o3VR_Wt^?m7=>!UoO@Ji&TS');
define('NONCE_SALT',       'ICVvsw8qN<9=:W~[t/x.Q2%OZtMaB9N}tm2*RTk6btKrDO/m~ik)kGKAj}v=B|P<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tbl_';

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
