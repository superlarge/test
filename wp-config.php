<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_default');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         '1fZPzKxn|T*Ke1Ie9zG<&8 &f+y%N50sh6f5g^S+.;G8B-g=q9S]H6aXxgeXINl!');
define('SECURE_AUTH_KEY',  'Sfq*4K^li2PZm,|B,$3#O$bW{^G$UN%g|g,ayO[itb1VFxh1 ZclDwF+FN`9B>n,');
define('LOGGED_IN_KEY',    ',]73GJ!:::E~ulO[o.#,;1^r MiF4G;BHz=jixBiwE fqBub{1&+.SLh2ht]iuI!');
define('NONCE_KEY',        'w8*BHCyG{P[ffb#rb r}w*SChA>BFcE^Fmg3-^wY;gp+7P?&=:}#sRP7F-Zw|rF&');
define('AUTH_SALT',        '&B}T^>l*<n(vd|_=%v!)8+O$0_y$`{gHP|/Zv@;Z|wF,K*?|LAe3(o]>1DlrIO7L');
define('SECURE_AUTH_SALT', '{Vv|sNa:|x:ESP3j`L=*%0flrWzN:juKjFJ_Ay+N`EnaBWxn@:yM_)/[`4rlXd6R');
define('LOGGED_IN_SALT',   'h+#[#poxj;9<hviE*1*|om:I)^^KUuGqQt]}JIYufTSl,nIi87n%/t-Xku2l!|5t');
define('NONCE_SALT',       '{}.AX|$2v}XR,b6x}W#_X}Dgn(n|Nk4g :oDr*`zYI|mk.7sjf@uSEd4k$$tszPC');


$table_prefix = 'wp_';


// Match any requests made via xip.io.
if ( isset( $_SERVER['HTTP_HOST'] ) && preg_match('/^(local.wordpress.)\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}(.xip.io)\z/', $_SERVER['HTTP_HOST'] ) ) {
define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );
define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] );
}

define( 'WP_DEBUG', true );



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
