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

//Checking email



//Put elements into table utenti

$sql = "INSERT INTO blog.utenti(nome, cognome, email, password) 
        values ('$_POST[nome]', '$_POST[cognome]', '$_POST[email]', MD5('$_POST[password]'))";
if($conn->query($sql) === TRUE){
	header("Location:Home_Page.html");
} else{
	//echo "Error creating user: " . $conn->error;
	header("Location:Registration.html");
}
$conn->close();
?>