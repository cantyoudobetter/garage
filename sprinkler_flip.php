<?php
$curl = curl_init('http://192.168.1.101/');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 

$r = curl_exec($curl);
curl_close($curl);


//echo "first".$r.":";
if ($r == '1') {
	$c = curl_init('http://192.168.1.101/?pin=OFF1');
	curl_exec($c);
	curl_close($c);
} else {
	$c = curl_init(('http://192.168.1.101/?pin=ON1'));
	curl_exec($c);
	curl_close($c);
}

?>
