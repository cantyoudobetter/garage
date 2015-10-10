<?php
$curl = curl_init('http://192.168.1.102/?pin=T');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 

$t = curl_exec($curl);
curl_close($curl);


$curl = curl_init('http://192.168.1.102/?pin=H');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 

$h = curl_exec($curl);
curl_close($curl);

$final = sprintf("%01.2f&deg;F,  %01.2f%% Humidity", $t, $h);
echo $final;

?>
