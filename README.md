# Twilio-Send-SMS

A simplest way to send text sms.

Sign up for a free Twilio account and buy a phone number.

Install the PHP helper library with Composer: composer require twilio/sdk:5.* then put   require "vendor/autoload.php'; at the top of your file.

Find your account SID and auth token in your console dashboard, and your phone number in your phone numbers list.

Create a file .php  and paste in the code below to:

Include the helper library
Create a Twilio client using our account credentials
Create a new message from our Twilio number, to our cellphone

<?php
 
require_once "vendor/autoload.php"; 
use Twilio\Rest\Client;
 
$account_sid = "YOUR_TWILIO_ACCOUNT_SID";
$auth_token = "YOUR_TWILIO_AUTH_TOKEN";
 
$client = new Client($account_sid, $auth_token);
 
$client->messages->create(
    'DESTINATION_PHONE_NUMBER',
    array(
        "from" => "1XYXYXYXYXY",//twilio_phone_number
        "body" => "Whaddup from PHP!"
    )
);

Save your file and run it: