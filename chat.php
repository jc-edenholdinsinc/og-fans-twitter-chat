<?php
require "vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

$CONSUMER_KEY = "";
$CONSUMER_SECRET = "";

$connection = new TwitterOAuth($CONSUMER_KEY, $CONSUMER_SECRET, $access_token, $access_token_secret);
$content = $connection->get("account/verify_credentials");
?>