

<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * This a production ready configuration for email sending
 * please change this when u are working with development mode
**/
$config['protocol']  = 'smtp';
$config['smtp_host'] = 'ssl://smtp.mailgun.org';
$config['smtp_port'] = 465;
$config['smtp_user'] = 'support@madebyus4u.com';
$config['smtp_pass'] = 'MadeByUs4U.com';
$config['mailtype'] = 'html';
$config['charset']   = 'iso-8859-1';
$config['wordwrap'] = TRUE;
$config['newline']  = "\r\n";
$config['useragent'] = 'MadeByUs4U.com';