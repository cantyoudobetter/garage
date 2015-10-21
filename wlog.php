<?php

//URL for DHT22 Device
$DHT22_IP = "192.168.1.104";
$IIC_IP = "192.168.1.102";

/*
$curl = curl_init('http://'.$IIC_IP.'/?pin=T');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 

$t = curl_exec($curl);
curl_close($curl);


$curl = curl_init('http://'.$IIC_IP.'/?pin=H');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 

$h = curl_exec($curl);
curl_close($curl);
*/
//from DHT22
$curl = curl_init('http://'.$DHT22_IP.'/temp');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 

$tdht = curl_exec($curl);
curl_close($curl);


$curl = curl_init('http://'.$DHT22_IP.'/humid');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 

$hdht = curl_exec($curl);
curl_close($curl);

//$final = sprintf("%01.2f&deg;F,  %01.2f%% Humidity", $t, $h);


$servername = "localhost";
$username = "mbordelon";
$password = "tamu1993";
$dbname = "weather";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
/*
$sql = "INSERT INTO data (type, value) VALUES (0, ".$t.")";

if ($conn->query($sql) === TRUE) {
    echo "New temperature record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO data (type, value) VALUES (1, ".$h.")";

if ($conn->query($sql) === TRUE) {
    echo "New humidity record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
*/
$sql = "INSERT INTO data (type, value) VALUES (0, ".$tdht.")";

if ($conn->query($sql) === TRUE) {
    echo "New DHT temperature record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO data (type, value) VALUES (1, ".$hdht.")";

if ($conn->query($sql) === TRUE) {
    echo "New DHT humidity record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

?>
