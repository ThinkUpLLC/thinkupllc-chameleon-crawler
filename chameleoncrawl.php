<?php
// Call with JSON parameter like so
//'{"installation_name":"mwilkie", "timezone":"America/Los_Angeles", "db_host":"localhost", "db_name":"thinkup_20120911", "db_socket":"/tmp/mysql.sock",  "db_port":""}';
$passed_in = $argv[1];

require_once 'config.inc.php';

// Go to ThinkUp root dir
chdir(dirname(__FILE__) . "/../..");
require_once 'init.php';

$params = JSONDecoder::decode($passed_in);

$CHAM_CONFIG['timezone'] = $params->timezone;
$CHAM_CONFIG['db_host'] = $params->db_host;
$CHAM_CONFIG['db_name'] = $params->db_name;
$CHAM_CONFIG['db_socket'] = $params->db_socket;
$CHAM_CONFIG['db_port'] = $params->db_port;
$CHAM_CONFIG['site_rooth_path'] = "/user/".$params->installation_name."/";
$CHAM_CONFIG['source_root_path'] = getcwd();
$CHAM_CONFIG['data_dir_path'] = $CHAM_CONFIG['data_dir_root'] . $params->installation_name.'/';

//echo Utils::varDumpToString($params);
//echo Utils::varDumpToString($CHAM_CONFIG);

$cfg = Config::getInstance($CHAM_CONFIG);

$credentials = array('crawl.php', $CHAM_CONFIG['thinkup_username'], $CHAM_CONFIG['thinkup_password']);
$controller = new CrawlerAuthController(3, $credentials);
echo $controller->go();
