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
define('DB_NAME', 'project');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         'O1K)I=]2sVCT:,3;,?3Q2a+`*R4yo|uw>{>)_>,f3~JGqv}bO)w0,zdwMqz.}{y^');
define('SECURE_AUTH_KEY',  ' G,H!IGR:>;k[ska-&ET!1ruY?G/)@MvXb[BBgj0Mv=i[YM&sQWh|3zRK3B]TKir');
define('LOGGED_IN_KEY',    'pJVhyO>i+?1I{}i,8);/,BJbDSs/cZ[,#d>K>xtqbNu,{,]tT;a.+P7kd>(%2)Gn');
define('NONCE_KEY',        '#}-aE^7Y~l!py&c8$EWAon(4vJyUI1AiwP9N$V{$wm!sb11s{5Vq[u:U-]xy:*8u');
define('AUTH_SALT',        'xF<8T2WH?|-6)=:K%L*8duraZ/qtRK.)E=jZC_ c}tW@aFd3_yp.{sj@N`M%PFR9');
define('SECURE_AUTH_SALT', '|><+?}60+UL&1w-D&Z+;(l,;c{lsyA#+Vru+D6_bf$[ja#%$?JDm5yeqI},.<jR7');
define('LOGGED_IN_SALT',   '+J/n}.SR7jJ3|A8j;rwW;y(fi/`aT4(X7:k9`E5XH%un|E,PBb]},K8[^ye=aSR+');
define('NONCE_SALT',       'WX/q}@m;UsH`;o?94vs|1QUf+[=^*:7TM__.H{P+O}bN4Qdo3%Tw&Xj%V#gd@L,P');

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
