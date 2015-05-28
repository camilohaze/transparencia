<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'transparencia');

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
define('AUTH_KEY',         '}qy8C/!-|.8v7i|VEmBi~b1$)n;&|SQX(.ykxJ2-k`dKq{C{C=n]]a-)U^MF+ye_');
define('SECURE_AUTH_KEY',  '1*mofYs|O12D3pv#V(V<_45xb[2<wM+~/,TI[zs};BN4H%d(kuC7t*/3wx<#E5]q');
define('LOGGED_IN_KEY',    '5s2%(n5QLY/mrDM1V!dC|`)Du.nqRhqKf<2$E(`Zk)?`|zdt_8uO#+f8mt?$HoK7');
define('NONCE_KEY',        '9+fMq)ul?:@$o|}-9oOoQTrkT@[L%]-XiUYgF/PSY]Z!PZ,>HmZ84xzR}L)lW({>');
define('AUTH_SALT',        '].[~-w*~{utr@K$v2y*L>Fw6syeOLMAYdaZ2Z|{=HPT.Omt<8.Ow`#WIR(0]7|t}');
define('SECURE_AUTH_SALT', '+uoN+uZHFuI(4aWv9(6,{cBx.:f~&!QB4+X1`WAz^]]?E*:>+:2cJRNCx=V-dlgH');
define('LOGGED_IN_SALT',   'jt8{DP]S9<;?EGVQe>)SSS>2QI%G*/pe*6aM+-NOclA7pk8AWQ]H?^SKt7~4|VY+');
define('NONCE_SALT',       '15jq1<w|OX^SS8<*z`SshyZ?wjCj2cE3nDG&CcxB<fcfP]-Lh25QoBe]{}eY,t3;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpt_';

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
