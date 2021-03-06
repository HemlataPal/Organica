<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'zeebecco_wo3473');

/** MySQL database username */
define('DB_USER', 'zeebecco_wo3473');

/** MySQL database password */
define('DB_PASSWORD', '4s2DoDP47HOv');

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
define('AUTH_KEY', '<Z)|x/dZN{[t^KO@JEBHtx=s;LElfgY-i)Psy/dF_@zKWe)jcz|C^gEzlp(nNmAiB&Nmzj|(_*_L_A(gZCo;D(YbtmiQ&NYsH@Zuef*ZgP|DgvrQsO[s*VGTtTuSys>w');
define('SECURE_AUTH_KEY', '{FH*tpHq_QST<vX<>vhf&==Xci(nqCJObijsi[De/Ks}%?v}]B}+ERDY;%{cldYMM(+;;HJ=RJW@>Mna+fwkVy|zvsghpLOw%g?MEI?e]+]hISf)Br(NVYSnK%gmD&pq');
define('LOGGED_IN_KEY', '+R-SID/+%?GGuZxR^hBC*<{YbrnMsOEyf-p|[G-MFnR&TMoOPE(^}KsXs}x}tEZd%CHjbRfKHhqVhaP[G@-pm&a@PvMftTGod%ZnN%cbr=RS}xusYpOWkR<$xcP^c!TH');
define('NONCE_KEY', 'pKaTGtvFM|xFmK!}jWD@AJT)W]$?O+vPMXtm&Fbrcp]EnPHFCNSFH_^DGdYESxKyCMoXQz%UY<&ybWoVsK>MK&MlcnXHCrs$=;IFhXHYgUd/U}N!cg*{?m+W^@N-RKq|');
define('AUTH_SALT', 'o]qtpOhAKv}R*ZlOvMf(_c$Xyb]cPxse!SFpLh$uQDtlY!-=buJduCo/}}-bKP/OwPtLZg]F-*gRT{+[O(QO?]NF/kJgJZ/lXlcsFvHKA-?rCNaw@]J{fb{nR/an)siB');
define('SECURE_AUTH_SALT', ';EN?wOMdMlcbOz<gnS[OAoG&PynTBxFzM<M<EUBP=z=MSne=m]?uHn]e|vHxsl/)LX@iqBEcA|{<-RleMD*hBUw>ZV{{QaoWz|nqDKaa<p}GyHbu+mvIn!*+?wCDkIzX');
define('LOGGED_IN_SALT', 'av|l_nobV=cECBblOonZcRjbK^?URM+<+QaqzhNSMtsEN+x@vCsJgmLPg=|liEL%sf/ZJ+oMl@IT@iBBHSnWFxPDI>LcZkT{)]ZpPtzA=K*e)M@y[wGjy}=Qm+o+)v]q');
define('NONCE_SALT', 'Uw;(XIIDRF&B-i)v_g))Fa$/PfdjhyaU]z(b@W(j>MTZoJTVQ!Fi_ifmUW*($NihQ!PE@B(bX(%^Be=/FJ/jsNU>?>TbJ;YyQfCJjaIDN(t@W|>{[^];m/iXcyQvG?}%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_ahvt_';

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

/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 */
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
}
