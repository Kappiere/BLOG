<?php
$servername = "localhost";
$username = "root";
$password = "kappiere97";

//Create connection

$conn = new mysqli($servername, $username, $password);

//check connection

if ($conn->connection_error){
	die("Connection failed: " . $conn->connection_error);
}

//Create tables

$sql = "
        CREATE TABLE blog.utenti(
                            nome varchar(20),
                            cognome varchar(20),
                            email varchar(20) primary key not null,
                            password varchar(20) not null)";
if($conn->query($sql) === TRUE){
	echo "Table created successfully";
} else{
	echo "Error creating table: " . $conn->error;
}
echo("<br>");
$sql = "
        CREATE TABLE blog.commenti(id int auto_increment primary key,
                                   contenuto varchar(256),
                                   data date)";
if($conn->query($sql) === TRUE){
	echo "Table created successfully";
} else{
	echo "Error creating table: " . $conn->error;
}
echo("<br>");
$sql = "
        CREATE TABLE blog.post(id int auto_increment primary key,
                               contenuto varchar(256),
                               data date)";
if($conn->query($sql) === TRUE){
	echo "Table created successfully";
} else{
	echo "Error creating table: " . $conn->error;
}
$conn->close();
?>