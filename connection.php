<?php 
    $servername = "localhost";
    $username = "root";
    $password ="";
    $dbname = "onlinebank1";  
    $conn = new mysqli($servername.":3307", $username,$password,$dbname);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo "connected succesfully ";
    
    ?>