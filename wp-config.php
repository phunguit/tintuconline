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
define('DB_NAME', 'tintuconline');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '/Y@N?(SGqN*Ys|gs+M`%{*>sU@HIrD3}^{<meK^j)!L,n:4f6tOX}y^xq/yQ^5}e');
define('SECURE_AUTH_KEY',  '=K0JwuK]Y;FpU[}M0W0)l6[pB|+AH7iJz,ByO2t6_[,d/iIsQ2e )fJ%q%NY9}7L');
define('LOGGED_IN_KEY',    'V*_GMo;~.xmO$xn4E5?otn>K_pOdoLJc:RsXb wewd^F=NxZKzB:51VqgMv23:Qe');
define('NONCE_KEY',        '8.]/3vft)z[+zew&.y#UoMh nD|.}5ITH%rfJLZM37Rl#(!K[%*v/hS:BjdjQ>ad');
define('AUTH_SALT',        ')0Yq_Y~yQ9A~B71As}m(mg}*>+-N4L8!Ypd_H {&0yME:zm:NmfF2w5jDAdqTz3!');
define('SECURE_AUTH_SALT', 'g7)b4VUbZ*).HiYwSiEs!s.89Q_q)vi+_o92G,Ja?nQf~B]R[qN[5,D*@RQ5~wi:');
define('LOGGED_IN_SALT',   '/d7_Or|dxA0LSA7@taxarj7*Ura1{*yVq7!a$/%DT YOC$7|Mvw#{,[VyBpBW=+8');
define('NONCE_SALT',       '{8<:tL?Z?B>3>DD9S:&I~0/Zv|Y>YT9jO@:b7DWnDr-iz[Mj_eyUWQ Vt8_=vHR!');

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
