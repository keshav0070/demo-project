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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'Xb_b:qLKwr*Le^@.Ar[N2|6}n:>sC~PlU90CL%1%iW7%Y:G7g6+-.GRxRO#VwkC<');
define('SECURE_AUTH_KEY',  '5Q)m!+P`iCjE^<~|dqKrbfX?sL?6>K#t1M/MbZ%Pm[TR*Og*04%|N]~W@Al39-%o');
define('LOGGED_IN_KEY',    '??c1DIt,iSJ%?B:~L`&<H.g.1L~&w6-YYjr{J;t1aL2 1lKfWa!/gf+aPRCHf3gE');
define('NONCE_KEY',        '75*uV w+eY5(I7.NN[1deXAf}z#:h;/Eq[52alc4iZm{l^R2VOfgZT&D-Nt9&me^');
define('AUTH_SALT',        '^%FyQZ;oF2 FPj!y*>Ser+p?+&3@t3~yy7~&qkcn!;E$7FHO>iOk2${ZP2%Q^DJO');
define('SECURE_AUTH_SALT', 'w++3Lw!zEKR8:PJ.(pBy1txsAu(d?cqQM8hyf<FHd}At-omE`Bn{PJjqwn%SR$[Q');
define('LOGGED_IN_SALT',   'M>qTNWH2BHD><FnzI4{kBdFGU{2{,]S2!X^9=A5.z`a#`|0oDJ(,Z%#6f+Rd[z`j');
define('NONCE_SALT',       'e6GA]VUuC ,gvj.B$tJD&.HD/lR:^3@g4zbcgN,=}{_,/Jl/c|qqN4buo@{hHA!x');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp';

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
