<?php

ini_set("display_errors", 0);

$curl =  curl_init();
//curl_setopt($curl,CURLOPT_URL,'http://192.168.1.28/wsdl/test.php');

curl_setopt_array($curl,array(
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_URL => 'http://192.168.1.28/wsdl/test.php',
CURLOPT_USERAGENT => 'TEST REQUEST OF CURL',
CURLOPT_POST => 1,
CURLOPT_POSTFIELDS => array('name'=>'Nimesh Koshti','fields'=>'IT COMMUNICATION')
));

$response = curl_exec($curl);
$response_info = curl_getinfo($curl);
echo '<pre>';
print_r($response_info);
//echo curl_errno($curl);
//echo curl_error($curl);
curl_close($curl);

?>

