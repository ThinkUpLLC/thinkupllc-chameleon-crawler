<?php
$custom_config = 'thinkupllc-config/config.inc.php';
if (file_exists($custom_config)) {
    require_once($custom_config);
    if (isset($THINKUP_CFG['thinkupllc_email_tout'])) {
        $CHAM_CONFIG['thinkupllc_email_tout'] = $THINKUP_CFG['thinkupllc_email_tout'];
    }
}

$CHAM_CONFIG['thinkup_username']    = 'thinkup_username_with_crawl_rights@example.com';
$CHAM_CONFIG['thinkup_password']    = 'thinkup_password';

$CHAM_CONFIG['data_dir_root']       = '/path/to/root/data/dir/';

$CHAM_CONFIG['db_user']             = 'generic_crawl_user';
$CHAM_CONFIG['db_password']         = 'generic_crawl_password';
$CHAM_CONFIG['db_type']             = 'mysql';

$CHAM_CONFIG['table_prefix']        = 'tu_';

$CHAM_CONFIG['debug']        		= true;
$CHAM_CONFIG['cache_pages']         = false;

$CHAM_CONFIG['mandrill_api_key']    = 'mandrill_api_key';

$CHAM_CONFIG['site_root_path']		= "/installation/{user}/";

$CHAM_CONFIG['thinkupllc_endpoint']  = 'https://www.thinkup.com/join/user/';

ini_set('error_reporting', E_ALL || E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);