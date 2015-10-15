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

$sql = "SELECT value, timestamp FROM data where type = 1";
$result = $conn->query($sql);
$JsonArray = array();

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	    $JsonArray[] = array( $row['timestamp'] => $row['value'] );
    }
} else {
    echo "0 results";
}
$conn->close();

echo json_encode($JsonArray);

?>
