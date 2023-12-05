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
define('DB_NAME', 'alpinaki_ldb'); 

/** MySQL database username */
define('DB_USER', 'alpinaki_FDvelop');

/** MySQL database password */
define('DB_PASSWORD', 'z#.siS9u#G9O');

/** MySQL hostname */
define('DB_HOST', '');

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
define('AUTH_KEY',         'D3w7Y&XMuH-U{K+sC}]l[{[r5 .my?C_gwlzpt@<1_uu7 XX2NH8 7e:g|DQ9DK6');
define('SECURE_AUTH_KEY',  'nt<&&)Ug^D#J87$7s`ycm1W$YH6KT+LO&pSMsfh5)86a4MnWBo07;1Atp&U:#0TL');
define('LOGGED_IN_KEY',    'UUl*)/w_mhDfa+ESBp*Hx:_r[3<6A{y>mG<(MgehF>rLL_<gKix:yk_8L8+XI_r4');
define('NONCE_KEY',        ';>i+Bg6i5,l0G)L]tYP4A|Nb+Bwh{;[:{aQeq2Yr/%rG!pEmf?7l YX9QFlCiQXG');
define('AUTH_SALT',        'P^yr89k44,AX#El=qHXAkklmqDDZVeXGJ!3m$pcoJ?{~KYpqdKm^Oq.f6Yp??=yd');
define('SECURE_AUTH_SALT', 'xP:01CDeA vM-cL&lCv1g@+rs=U;r|BvY,{+D=D)&ZDN30=I{/AT5?Eh@I<K|B|u');
define('LOGGED_IN_SALT',   'ni=Kw((1,dgm[hw20?b<4_$T|[`*8]+No1yLC?`ZX6K>B,>)F(q&Sb!}2FM$`_1f');
define('NONCE_SALT',       '~mUm]04h<(M0ddp]b]GPj#PGfJzH=#1aj1MJS;G;>K#@W@[qiufST3(5Q!QAi/J]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ag_';

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
