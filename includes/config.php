<?php

if (!isset($_SESSION)) 
{ 
     session_start(); 
} 

// TODO is this still needed ?
ob_start();

// define('ROOT_DIR', dirname(__FILE__));

$my_init_data = parse_ini_file("data.ini");

// port=8889;  the default configuration for MAMP uses ports 8888 and 8889, and 7888
$db = new PDO(
   sprintf(
      'mysql:host=%s;dbname=%s',
         $my_init_data['cmeyer_db_host'], 
         $my_init_data['cmeyer_db_name']),
   $my_init_data['cmeyer_db_username'],
   $my_init_data['cmeyer_db_password']);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

# Slack URLS
define("SLACK_ERRLOG_URL", $my_init_data['slack_errlog_url']);
define("SLACK_CONSENT_URL", $my_init_data['slack_consentements_url']);

function __autoload($class) {
   my_autoload($class);
}

function my_autoload($class) {
   $class = strtolower($class);
}

spl_autoload_register(function($class) {
   my_autoload($class);
});

?>
