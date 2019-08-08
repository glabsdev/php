<?php

$app_id = "B54z9Ug5512HHrTGRT5g6hq64pGUq6ap";
$app_secret = "f655413712345607a696cd40741993758c411af3bb5f6c230270ec26e8d54126";
$subscriber_number = "9771234567";
$amount = "0.00";
$duration = "0";

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://devapi.globelabs.com.ph/payment/v1/smsoptin?app_id=".$app_id."&app_secret=".$app_secret."&subscriber_number=".$subscriber_number."&duration=".$duration."&amount=".$amount,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_HTTPHEADER => array( "Host: devapi.globelabs.com.ph" ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}