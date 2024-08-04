<?php

/*

* ==============================================================================================================
*
*
* The minimum requirements to get phpList working are in this file.
* If you are interested in tweaking more options, check out the config_extended.php file
* or visit http://resources.phplist.com/system/config
*
* ** NOTE: To use options from config_extended.php, you need to copy them to this file **
*
==============================================================================================================

*/

// QG individual config values:
$pageroot = '/';
$default_system_language = "de";
$language_module = "german.inc";
define('ALLOW_ATTACHMENTS',1);
// NOT Show the link(s) to subscribe page(s) on the phpList public homepage (lists/)
define('SHOW_SUBSCRIBELINK', false);
// NOT Show link to the preferences page on the phpList public homepage (lists/)
define('SHOW_PREFERENCESLINK', false);
// NOT Show link to the unsubscribe page on the phpList public homepage (lists/)
define('SHOW_UNSUBSCRIBELINK', false);
//////////////////////////////


// what is your Mysql database server hostname
$database_host = 'localhost';

// what is the name of the database we are using
$database_name = 'd03d8315';

// what user has access to this database
$database_user = 'd03d8315';

// and what is the password to login to control the database
$database_password = 'password-goes-here';

// if you have an SMTP server, set it here. Otherwise it will use the normal php mail() function
//# if your SMTP server is called "smtp.mydomain.com" you enter this below like this:
//#
//#     define("PHPMAILERHOST",'smtp.mydomain.com');

define('PHPMAILERHOST', 'w018f2b5.kasserver.com');
define('PHPMAILERPORT', 25);
define('PHPMAILER_SECURE','tls');
$phpmailer_smtpuser = 'm069d8d5';
$phpmailer_smtppassword = 'password-goes-here';


// if TEST is set to 1 (not 0) it will not actually send ANY messages, but display what it would have sent
// this is here, to make sure you edited the config file and mails are not sent "accidentally"
// on unmanaged systems

define('TEST', 0);
/*

==============================================================================================================
*
* Settings for handling bounces
*
* This section is OPTIONAL, and not necessary to send out mailings, but it is highly recommended to correctly
* set up bounce processing. Without processing of bounces your system will end up sending large amounts of
* unnecessary messages, which overloads your own server, the receiving servers and internet traffic as a whole
*
==============================================================================================================

*/

// Message envelope.

// This is the address that most bounces will be delivered to
// Your should make this an address that no PERSON reads
// but a mailbox that phpList can empty every so often, to process the bounces

$message_envelope = 'mailservice@quaelgeist.sm';

// Handling bounces. Check README.bounces for more info
// This can be 'pop' or 'mbox'
$bounce_protocol = 'pop';

// set this to 0, if you set up a cron to download bounces regularly by using the
// commandline option. If this is 0, users cannot run the page from the web
// frontend. Read README.commandline to find out how to set it up on the
// commandline
define('MANUALLY_PROCESS_BOUNCES', 1);

// when the protocol is pop, specify these three
$bounce_mailbox_host = 'localhost';
$bounce_mailbox_user = 'm069d8d5';
$bounce_mailbox_password = 'password-goes-here';

// the "port" is the remote port of the connection to retrieve the emails
// the default should be fine but if it doesn't work, you can try the second
// one. To do that, add a # before the first line and take off the one before the
// second line
//$bounce_mailbox_port = '110/pop3/notls';
//$bounce_mailbox_port = "110/pop3";

// it's getting more common to have secure connections, in which case you probably want to use
$bounce_mailbox_port = "995/pop3/ssl/novalidate-cert";

// when the protocol is mbox specify this one
// it needs to be a local file in mbox format, accessible to your webserver user
//$bounce_mailbox = '/var/mail/listbounces';

// set this to 0 if you want to keep your messages in the mailbox. this is potentially
// a problem, because bounces will be counted multiple times, so only do this if you are
// testing things.
$bounce_mailbox_purge = 1;

// set this to 0 if you want to keep unprocessed messages in the mailbox. Unprocessed
// messages are messages that could not be matched with a user in the system
// messages are still downloaded into phpList, so it is safe to delete them from
// the mailbox and view them in phpList
$bounce_mailbox_purge_unprocessed = 1;

// how many bounces in a row need to have occurred for a user to be marked unconfirmed
$bounce_unsubscribe_threshold = 2;

// choose the hash method for password
// check the extended config for more info
// in most cases, it is fine to leave this as it is
define('HASH_ALGO', 'sha256');

// Do not check session IP address (due to Safari private relay changing adresses randomly)
define('CHECK_SESSIONIP', 0);

// prevent unsubscription from being accidentally performed by requiring a confirmation/cause to be entered
define('UNSUBSCRIBE_JUMPOFF', 0);

// config for phpListUpdater plugin
$updaterConfig = [
  'work' => '/www/htdocs/w018f2b5/temp',
  'max_execution_time' => 240,
  'memory_limit' => '1024M',
  'keep_backups' => 1
];