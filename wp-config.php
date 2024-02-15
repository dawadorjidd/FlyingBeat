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
define( 'DB_NAME', 'wordpress' );
/** Database username */
define( 'DB_USER', 'wordpress' );
/** Database password */
define( 'DB_PASSWORD', 'wordpress' );
/** Database hostname */
define( 'DB_HOST', 'database.tourism.internal' );
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
define( 'AUTH_KEY',         'L*3Y(c(.)b?nIilA`R%xmB+&Gm..W5n-U%fA)w.K^&-VlbKHjaYr0GF#VUb3cW|Q' );
define( 'SECURE_AUTH_KEY',  '%qSSyNQ@rpdf`R]x^Zh/Ng/|42j;RKJJ1zpm9xHS{f-* 9!m1Q?SUHCn&)XE;,QQ' );
define( 'LOGGED_IN_KEY',    'bf|t=47q;qe?:VSUn }Q>qJsd6aEothADZt1A6K~jZ~$T{{_W#fuz,kERD5$K<j#' );
define( 'NONCE_KEY',        '|BcbP&(j;=Lb`%y$o3gW!Y qJ#U)CdZN[=%^5d|-@x*M:YC=}7S~tuO=.J94&jK&' );
define( 'AUTH_SALT',        '6ZtLk/;P2D:EMld_k)*(3@-l3O-1B(Hnw[lFXO|2p>z:2xU:?6[Hc01pO*0u0Dca' );
define( 'SECURE_AUTH_SALT', 'S96Qu[(O;-o(39NS@AEhF)cfm@U;|mJ&W72n,qKv7Vt-}2YF^Ntl{_B1[~alSF`w' );
define( 'LOGGED_IN_SALT',   'K9et%rAqNL*[K~z;MLI.0o/]ITXC)UW}i;r5<OI:A.ocTQVarcV26?!=N${9qA24' );
define( 'NONCE_SALT',       'e{2Le.L{x@!D|WOuV9])h,^&gMqf}P!KepiTB;:{<qX+qen[ j}{CeQP{}GP-te]' );
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