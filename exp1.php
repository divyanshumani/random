<?php

$url ="http://........"; //enter the url you want to fetch
$ch = curl_init();
curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);  
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 3);     
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>