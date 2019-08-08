<?php

$access_token = "A-2szoYus7mB13l5axDrr_1234AApSz8eu236GRNsoBQ";
$amount = "0.00";
$description = "NodeJS Charging Description";
$endUserId = "9771234567";
$referenceCode = "26481000001";
$transactionOperationStatus ="Charged";
$duration = "0";

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://devapi.globelabs.com.ph/payment/v1/transactions/amount?access_token=".$access_token,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{ \"amount\": \"".$amount."\", \"description\": \"".$description."\", \"endUserId\": \"".$endUserId."\", \"referenceCode\": \"".$referenceCode."\", \"transactionOperationStatus\":\"".$transactionOperationStatus."\", \"duration\":\"".$duration."\" } ",
  CURLOPT_HTTPHEADER => array( "Content-Type: application/json", "Host: devapi.globelabs.com.ph" ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}