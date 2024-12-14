<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "onlinebank1";

// Create connection
$conn = new mysqli($servername.":3307", $username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, username, password FROM users1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border=1><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["username"]." ".$row["password"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>