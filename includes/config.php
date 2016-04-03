<?php

if (!isset($_SESSION)) 
{ 
     session_start(); 
}

// Read in config data
$my_init_data = parse_ini_file("data.ini");

//The behavior of the error functions is affected by settings in php.ini
error_reporting(E_ALL);

// This should FALSE in Production !
$displayErrors = $my_init_data['ini_display_errors'] === 'true' ? true : false;
ini_set('display_errors', $displayErrors);
ini_set('log_errors', true);

// TODO is this still needed ?
ob_start();

# Define program-wide constants

define("FRENCH", "fr");
define("ENGLISH", "en");

# Database
define("USE_DATABASE", $my_init_data['use_database'] === 'true' ? true : false);
error_log("USE_DATABASE: " . USE_DATABASE);

# Consent form and email
define("CONSENT_USER_TABLE", $my_init_data['consent_user_info_table']);
define("CONSENT_EMAIL_SENDER", $my_init_data['consent_email_sender']);

# Slack
define("USE_SLACK", $my_init_data['use_slack'] === 'true' ? true : false);

error_log("USE_SLACK: " . USE_SLACK);

define("SLACK_TESTING_URL", $my_init_data['slack_testing_url']);
// define("SLACK_ERRLOG_URL", $my_init_data['slack_errlog_url']);
define("SLACK_ERRLOG_URL", SLACK_TESTING_URL);

// define("SLACK_CONSENT_URL", $my_init_data['slack_consentements_url']);
define("SLACK_CONSENT_URL", SLACK_TESTING_URL);

define ("CONTACT_EMAIL_RECIPIENT", $my_init_data['contact_email_to']);
define ("ERROR_EMAIL_RECIPIENT", $my_init_data['error_email_to']);


function __autoload($class) {
   my_autoload($class);
}

function my_autoload($class) {
   $class = strtolower($class);
}

spl_autoload_register(function($class) {
   my_autoload($class);
});

// Set up connection to DB.
// port=8889;  the default configuration for MAMP uses ports 8888 and 8889, and 7888
// Setting connection encoding to UTF8

$db = null;
if (USE_DATABASE) {
   try {
      $db = new PDO(
         sprintf('mysql:host=%s;dbname=%s;charset=utf8', $my_init_data['cmeyer_db_host'], $my_init_data['cmeyer_db_name']),
               $my_init_data['cmeyer_db_username'],
               $my_init_data['cmeyer_db_password']);

      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   }
   catch (PDOException $e) {
      // QLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry 'abc@xyz.com' for key 'courriel'
      $errMsg = sprintf("ERROR! Unable to connect to DB %s, %s: %s", 
               $my_init_data['cmeyer_db_name'], $my_init_data['cmeyer_db_host'],  $e->getMessage());
      error_log($errMsg, 1, ERROR_EMAIL_RECIPIENT);
      sendToSlack(SLACK_TESTING_URL, $errMsg);
   }
}
else {
   error_log("USE_DATABASE is false; not setting up database");
}

?>
