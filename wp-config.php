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
define( 'DB_NAME', 'krushqbd_chikmag' );

/** MySQL database username */
define( 'DB_USER', 'krushqbd_chikmag' );

/** MySQL database password */
define( 'DB_PASSWORD', '4p0CVS(3.6' );

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
define( 'AUTH_KEY',         'nsgqbgw8thuvchm7rqnaof56argvzjq4ubpug4cxnfpwedhi0gnf04j6odqvmobm' );
define( 'SECURE_AUTH_KEY',  'g2oqwu1hza63aodatjb4yersq54rl6ijzch0xmz4bz3ksn3rzp2xslnzyif072t5' );
define( 'LOGGED_IN_KEY',    'ikfue7vpmorbuetwat4sildkwlqn2x4ox5rexd6b3xk8ogoyq7wmll99rfclvqja' );
define( 'NONCE_KEY',        'xcyheqia1vnu626veyxwwoj0syimdwtpvdbx9znhfytnhl0uejfd1tm4fkob7pah' );
define( 'AUTH_SALT',        'mqtc587kmilvm5hgkgrffzjhgtny451nps4yc9t4pzhp8dso6oj1mbmnilqowsdn' );
define( 'SECURE_AUTH_SALT', 'vz4vqgu3eucatvvlzrspu3ndr0sdzm3nms0i2jgbeidniwkpon4te9hppnkttpga' );
define( 'LOGGED_IN_SALT',   'cez71ik9joju9mnzh9sxgii3rlixfkerpusdj1ecao296qrmqrpwuuattpsdimbm' );
define( 'NONCE_SALT',       'uzpqdrzfxvtdem3gw3zc1549bgcudqdrmss2oabalhomzpcdfba8gvtyjen7xchg' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpg9_';

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
