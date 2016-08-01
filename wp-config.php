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
define('DB_NAME', 'perusv');

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
define('AUTH_KEY',         '*G)S3[KCtZd9B w#u)oFS7VT)Z)1Fd:)%d}5pNz4:OWf,__#[L0C*s3ggxsqUblM');
define('SECURE_AUTH_KEY',  'UR?y6II[SA^DZb{H)oX#brd[zsxt.`.CFbMGoq8{b]SGt_f`ams5bqq@+8?2xf<r');
define('LOGGED_IN_KEY',    'HVLIscX|B2Zn@!Y3*{8=&OG[j:n#sO1Y8+FxtFaU&`|D`.L7OQK+%klRg@3n[[cJ');
define('NONCE_KEY',        'H<iPZjY]GpO8/PNt0i8[8jEZCew>~<N{a^ 17!L_3Dv4]b]W9F.J3rK(yAcbo.)m');
define('AUTH_SALT',        '1vTu}n%_Qz0ii4a<i9aJ4HhSPCE/G`B~9v3qU3_UFaiVvd0BLlA#^p-5R}ff#{y(');
define('SECURE_AUTH_SALT', '^g[zM<StTa9Q#^asRqc>A3,ZLV[B;wtjh|VWbC1}8M_349G3MG(WkHj<~7Q]{~Np');
define('LOGGED_IN_SALT',   'K-WHnLIjeM[k`Uu;4d+ti1*I76XMc{nyB/faS;1KZ},$w-selwbH8lC(lDo:VF>2');
define('NONCE_SALT',       '>V25RV::H6~CSmZm|2heqCn{Q#x!<>PNAP?z -Mx3)+F:D7uD_KmO7S}X<]^4QQQ');

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

