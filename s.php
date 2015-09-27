<?php
$curl = curl_init('http://192.168.1.40/');
//$curl = curl_init('https://ptiipad.com/pti-admin/json/agencies.php');
$result = curl_exec($curl);
echo $result;
curl_close($curl);

?>
