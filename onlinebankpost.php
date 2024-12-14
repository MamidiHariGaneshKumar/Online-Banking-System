<?php
$uname = $_POST['username'];
$pswd = $_POST['password'];

//DB connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlinebank1";

try {
    $conn = new PDO("mysql:host=$servername;port=3307;dbname=$dbname", $username);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO users1 (username,password)
    VALUES ('$uname', '$pswd')";
    
    $conn->exec($sql);
    echo "New record created successfully<br>"; 
	echo "<a href=db-insert.html>Go Back </a>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>