<?php

$servername = "localhost";
$username = "root";
$password = "mysql";

// Creating Connection 

$conn = new msqli($servername,$username,$password);

if($conn -> connect_error){
    die("Connection Failed:"+$conn->connect_error);
}

echo "Connected Successfully";

?>