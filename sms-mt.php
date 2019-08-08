<?php

$v_shortcode = "2648";
$v_access_token = "A-2szoYus7mB13l5axDrr_1234AApSz8eu236GRNsoBQ";
$v_address = "9771234567";
$v_clientCorrelator = "264801";
$v_message = "PHP SMS Test";

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://devapi.globelabs.com.ph/smsmessaging/v1/outbound/".$v_shortcode."/requests?access_token=".$v_access_token ,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\"outboundSMSMessageRequest\": { \"clientCorrelator\": \"".$v_clientCorrelator."\", \"senderAddress\": \"".$v_shortcode."\", \"outboundSMSTextMessage\": {\"message\": \"".$v_message."\"}, \"address\": \"".$v_address."\" } }",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json"
  ),
));
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
