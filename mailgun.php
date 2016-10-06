<?php
require 'vendor/autoload.php';
use Mailgun\Mailgun;

$mg = new Mailgun("key-94bbf5286a778ef8d53e7ae1e22cb709");
$domain = "theernestogarza.com";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$from = $_POST['from'];
	$subject = 'Message from personal site from ' . $_POST['first_name'] . ' ' . $_POST['last_name'] . ' ' . $_POST['telephone'];

	$mg->sendMessage($domain, array(
		'from'    =>   htmlspecialchars(strip_tags($from)),
		'to'      => 'Ernesto Garza <neto_neto@hotmail.com>',
		'subject' =>  htmlspecialchars(strip_tags($subject)),
		'text'    =>  htmlspecialchars(strip_tags($_POST['message']))

));
};

