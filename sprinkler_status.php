<?php
$curl = curl_init('http://192.168.1.101/');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 

$r = curl_exec($curl);
curl_close($curl);


echo $r;

?>
