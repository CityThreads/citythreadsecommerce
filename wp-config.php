<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecommerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'kE>SO+KAWj@|=kU8(m8Vj1gw$!*5!Jx,0S}n1Ab!a;n(l;4$J3f_>2Nx@X-a/l5s' );
define( 'SECURE_AUTH_KEY',  '`KIwPq@1D=|kqEOo Mh][v;`;ygY@PuGi>~K.Of85x+T]Z>@G fTs04hvMi7B_)4' );
define( 'LOGGED_IN_KEY',    '?<*_ISYS;}vH:(d}w&V;fqtn+qh1>w}@zOr0NK6As(oP5K[wZ~#h c5N-WtDk+*2' );
define( 'NONCE_KEY',        'oXB3`EOW(yGL~o! B5Lz|TrGA5-RqSS;x&=@WI#U/tl;:%,}b>.%syYaM,~DO8zs' );
define( 'AUTH_SALT',        'q^|+KG.O{1<XGb`ZgI@U`@Yv_Y$>CkL}Hw;wv|Q0I[31=?,[te?x,=$G&`I^zK#a' );
define( 'SECURE_AUTH_SALT', '9P-SYF-MxU*/afbc hYl^M/Rbg$-~NTyMgtd.O2bEjdlN98r%%oCg=U4GmB9r=L=' );
define( 'LOGGED_IN_SALT',   '.7_{6=.K@Fq!/ndNGAg{[dG3VP#nsp(3Ccy3!-*1AnW|#pu@Okoy[4y(K8W>OkI>' );
define( 'NONCE_SALT',       'v[qJLagDwJap?73cj?0csmF!vhI[LnSeIcNK]cL=WHz++!f-dIF;J],(WrVPE)hP' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
