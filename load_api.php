<?php
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://devapi.globelabs.com.ph/rewards/v1/transactions/send",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\n \"outboundRewardRequest\" : {\n \"app_id\" : \"<app_id>\",\n \"app_secret\" : \"<app_secret> \",\n \"rewards_token\" : \"<rewards_token> \",\n \"address\" : \"<address>\",\n \"promo\" : \"<promo>\"\n    }\n}",
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
