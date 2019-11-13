<?php

$dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 
 $conn = new mysqli($dbhost, $dbuser, $dbpass) or die("Connect failed: %s\n". $conn -> error);


 $sql= "CREATE TABLE author ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,name VARCHAR(30) NOT NULL)";


	    $sql1 = "CREATE DATABASE votingpoll";
if($conn->query($sql1) === TRUE) {

    echo "Database created successfully";
    
}else {
    echo "Error creating database: " . $conn->error;
}

$db="votingpoll";
 	$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 	if($conn->query($sql) === TRUE) {

    echo "table created successfully";
    
} else {
    echo "Error creating database: " . $conn->error;
}
?>