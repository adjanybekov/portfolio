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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'PSd&>Ck<cU6o5kg=B?B<q[ys,;JgM+ CdQ#hx)8BNFm$bl{#u_PRra{jDi b7S%}' );
define( 'SECURE_AUTH_KEY',  '+bGuHcAI U,YE4r3)juFyAIJ,=juCcPhcR)QHT&d6/$K/3[eWgOgwrIv8{T8JP/@' );
define( 'LOGGED_IN_KEY',    '/v@inC[3$pU,_T|5K#<`yIL;?JRC%>+>!|~M,/OSH[Df^)dw-.DIb<s94QJW6kUT' );
define( 'NONCE_KEY',        'X[R^Gw:Fd!m2n]qe0AW2$#oO+A:A`n|&._7*~Qp7N,_>_fY`O3/hhMmfKd]s1A^x' );
define( 'AUTH_SALT',        'cE2w9C2bJj4g<;]e])(iLs?ZXAWc.n@QYasu#+HGyv@Kz}mB7l$.EsH#i}?hl9Ua' );
define( 'SECURE_AUTH_SALT', 'uOE?vYM=w>a8VSOA1J4PzRtQd22E1e/4?V|XR/yAM??3:zi=^~Q{w5D*ey-`e?Q|' );
define( 'LOGGED_IN_SALT',   '*igK+9u#N{&k*zNI7;hUCo1C0Q!HhBb/[Y%UMGJJJkFsRvISJ/@kEvU2tf[(e#>L' );
define( 'NONCE_SALT',       '7k@W`X6!U$+6r6dyVHr+C!CQy8pX3%+;PfX;V:>A*]N1txNo}}m)6d0a[rXS/%34' );

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
