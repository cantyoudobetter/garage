<?php
$curl = curl_init('http://192.168.1.102/?pin=T');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 

$t = curl_exec($curl);
curl_close($curl);


$curl = curl_init('http://192.168.1.102/?pin=H');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 

$h = curl_exec($curl);
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



$conn->close();

?>
