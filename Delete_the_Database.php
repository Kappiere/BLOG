<?php
//Actually is not working , in the future I'll try to delete only the inside of some table (like post) and not all the database
$servername = "localhost";
$username = "root";
$password = "";

//Create connection

$conn = mysql_connect($servername, $username, $password);

//Check connection

if ($conn->connection_error){
	die("Connection failed: " . $conn->connection_error);
}

//Drop Database

$sql = "DROP DATABASE blog";
if(mysql_query($sql,$conn)){
	echo "Database erased successfully";
} else{
	echo "Error erasing database: " . $conn->error;
}

$conn->close();
?>
