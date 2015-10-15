<?php
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

//$sql = "SELECT value, timestamp as ts FROM data where type = 0 ORDER BY id DESC LIMIT 2016";
$sql = "SELECT value, timestamp as ts FROM data where type = 0 ORDER BY id DESC LIMIT 2016";
//$sql = "SELECT value, UNIX_TIMESTAMP(timestamp) as ts FROM data where type = 0 ORDER BY id DESC LIMIT 2016";
$result = $conn->query($sql);
$JsonArray = array();

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	    $JsonArray[] = array(( (strtotime($row['ts'])-(60*60*5))*1000),floatval($row['value']) );
    }
} else {
    echo "0 results";
}
$conn->close();

echo json_encode($JsonArray);

?>
