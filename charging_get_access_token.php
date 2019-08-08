<?php

var app_id = "B54z9Ug5512HHrTGRT5g6hq64pGUq6ap";
var app_secret = "f655413712345607a696cd40741993758c411af3bb5f6c230270ec26e8d54126";
var code = "osg68ErhoXxaACygn5yS7yAqRfB6E49S7qE75Id6z4puxBayXhpGMdzFzxeb6FKded8uayLbE8kxroI4zEB8taBrxeseAbLdsebpBLf4Rgp9Udkz6gFrnLdjC7oe9xu6begLFEyMj7FnRapRhjazkAuxaEyEIAoEdLSL6ALMfaqnE5SqjxXnCdX8johkpeBRs";


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://developer.globelabs.com.ph/oauth/access_token?app_id=".$app_id."&app_secret=".$app_secret."&code=".$code,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_HTTPHEADER => array( "cache-control: no-cache" ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}