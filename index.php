<?php

// Required if your environment does not handle autoloading
require __DIR__ . '/vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account AccountSid and Auth Token from twilio.com/console
$AccountSid = 'AccountSid';
$AuthToken = 'AuthToken';
$client = new Client($AccountSid, $AuthToken);

// Use the client to do fun stuff like send text messages!

// An array of users(receivers) containing Mobile Number & Name.
// +1 is code of country(US). And xxxxxxxxxx is user's mobile number.
$people = array(
	'+1xxxxxxxxxx' => "Chirag",
	'+1xxxxxxxxxx' => "Sid",
	'+1xxxxxxxxxx' => "Hemant",
	'+1xxxxxxxxxx' => "Pushpak",
);
foreach ($people as $number => $name) {
	$sms = $client->account->messages->create(
		$number,
		array(
			'from' => "+1XYXYXYXYXY", //phone number from twilio.com
			'body' => "Message Body. -Automated Message, No-Reply"
		)
	); 
	echo "Sent message to $name <br><br>";
}
?>