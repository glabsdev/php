<?php

$app_id = "B54z9Ug5512HHrTGRT5g6hq64pGUq6ap";
$app_secret = "f655413712345607a696cd40741993758c411af3bb5f6c230270ec26e8d54126";
$rewards_token = "AbCkxKYid_F_p-JSgTejow";
$address = "9001234567";
$promo = "LOAD 1";

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://devapi.globelabs.com.ph/rewards/v1/transactions/send",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{ \"outboundRewardRequest\" : { \"app_id\" : \"".$app_id."\", \"app_secret\" : \"".$app_secret."\", \"rewards_token\" : \"".$rewards_token."\", \"address\" : \"".$address."\", \"promo\" : \"".$promo."\" } }",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
    "Host: devapi.globelabs.com.ph"
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
