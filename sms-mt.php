<?php
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://devapi.globelabs.com.ph/smsmessaging/v1/outbound/<Shortcode>/requests?access_token=<access_token>",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\"outboundSMSMessageRequest\": {\r\n   \"clientCorrelator\": \"<clientCorrelator>\",\r\n   \"senderAddress\": \"<Shortcode>\",\r\n   \"outboundSMSTextMessage\": {\"message\": \"Hello World\"},\r\n   \"address\": \"<address>\"\r\n }\r\n}",
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
