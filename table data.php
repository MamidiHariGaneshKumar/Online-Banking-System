<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "onlinebank1";

try {
    $conn = new PDO("mysql:host=$servername;port=3307;dbname=$dbname", $username);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO users1 (username, password)
    VALUES ('5211411050@gmail.com', 'Arun@wt')";
    
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>