<?php
// These should be true while developing the web site define('IS_WARNING_FATAL', true); 
define('DEBUGGING', true);

// The error types to be reported 
define('ERROR_TYPES', E_ALL);

// Settings about mailing the error messages to admin 

define('SEND_ERROR_MAIL', false); 
define('ADMIN_ERROR_MAIL', 'Administrator@example.com'); 
define('SENDMAIL_FROM', 'Errors@example.com'); 
ini_set('sendmail_from', SENDMAIL_FROM);

// By default we don't log errors to a file 

/*define('LOG_ERRORS', false); 
define('LOG_ERRORS_FILE', 'c:\\tshirtshop\\errors_log.txt'); //windows
define('LOG_ERRORS_FILE','/home/username/tshirtshop/errors.log'); // Linux */

/* Generic error message to be displayed instead of debug info (when DEBUGGING is false) */ 
define('SITE_GENERIC_ERROR_MESSAGE', '<h1>Rollmarket Error!</h1>'); 
?>