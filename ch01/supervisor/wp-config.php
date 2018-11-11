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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
 define('AUTH_KEY',         ' m!&&5q9[=T)QZLH63++*K4M(^I^0@+!cO[kH(SIjz{9b`VO%~`<+}N*g/]a2Fl0');
 define('SECURE_AUTH_KEY',  '-wY<:!aIGI0,~Z0rWkp$-~Ip$}xG.j?.?3b,BN6Wqh2!b{R@=e!Ugv|dv-&wa9IX');
 define('LOGGED_IN_KEY',    '^4E0hy5$mm#[3|_@K|Wp/!%!Q+2us|WbV|1s++R1TacMho]awdEQ,#v-7c?|bkuU');
 define('NONCE_KEY',        ' WKT<QiXoEA?(zVK+o;,rm8KY)Mdh|qN:YypH3XD+JZ:>D$}N}.gY|*~ ~{aj]}(');
 define('AUTH_SALT',        'DlS3yD-`,+R b/WMwtD;DhRv#<+d@hS7Vv47(_H<d<Rx].$``rZ%leT_2MbA!*~G');
 define('SECURE_AUTH_SALT', 'n={=Qi1DTU-j0Dd*?d# 5;h8#;Ig3z4`BsJlppK462Saz&IOv1!8(av-y,i&r}6%');
 define('LOGGED_IN_SALT',   ']MWP[=u?Y-%fDmX%|#O)CIvkoZ,99}7u1c;oO)h3j&yX=sd=4V<h+L8VB#R.YhXS');
 define('NONCE_SALT',       '?Dy#dxnFem;D%]Yv[4dPOz-PLum2t3}Pw;JwggO%IF;Nlj9Lp1dSl,~OPzFfQO0N');

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
