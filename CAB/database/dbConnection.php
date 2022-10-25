<?php 


$serverName = 'localhost';
$username = 'root';
$password = '';
$dbName = 'train';

// Connection code
$conn = mysqli_connect($serverName, $username, $password, $dbName);

//Check that connection took place

if($conn->connect_error){
die("Connection failed: " . $conn->connect_error);
}

    
