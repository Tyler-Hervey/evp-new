<?php
# Database Configuration
define( 'DB_NAME', 'wp_futureevp' );
define( 'DB_USER', 'futureevp' );
define( 'DB_PASSWORD', '1W0SGjDKcbop0vqgG9x3' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'x)t#E[m8o0z|eicS!-zU`:r_zp8S-MfP,$Dy#m!5gub%unW]1`yxX0M,7m:n{QZq');
define('SECURE_AUTH_KEY',  '3aZcP==Bue4n/)<hQtbZU%1+ujmNDJ&9oRmr51mbZ&7Dx}Tp4El !wU)!QsDq(8(');
define('LOGGED_IN_KEY',    'md@o*E5:}$E9,lK<v1U@4Zkxd:zsWZmr35]`1c+7>)3:%5|3r{t+U!5y++.p|FJ ');
define('NONCE_KEY',        'Q3BEFV>6HiBDW&)T+QlYMsrvm!5o[Qu!M]1!0LUZE>VB|M}|)Tz#|%S)F!6)zAks');
define('AUTH_SALT',        'd|~|wtHoa}aA|pQ#8VWyNhR+]|%L6D7tc1~P5i^1k`;n[]+Pw.(d,:n9orkH6|,9');
define('SECURE_AUTH_SALT', 'V&D-qz:UPoW1|5%/4| n6@5<:+A ?|dz%yzEI:mhwaw/O.{=Q |.G-g|Om{eWpUn');
define('LOGGED_IN_SALT',   '3-, +WLmx?L(>9n(MDD 7,4}|bp^9)fjsGx?&t8b`Se%kU_-,nob5@-XV{xY!W/@');
define('NONCE_SALT',       '/Vs@i$qNnxi?=d>XR*Cz|;|/7H_AzA2+zFde]a$0&ny9|!4P<gumO3}SV>^EwPkY');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'futureevp' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', 'c66383cdbef8fe45bc51232a926ccc41ceec1593' );

define( 'WPE_CLUSTER_ID', '120264' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'futureevp.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-120264', );

$wpe_special_ips=array ( 0 => '35.192.54.197', );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
