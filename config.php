<?php

$host="localhost";
$user="root";
$pass="";
$dbname="hamburgershop";

try {
	
	$conn=new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);

    echo "Connection was successful";

} catch (PDOException $e) {
	echo "error: " . $e->getMessage();
}
 ?>