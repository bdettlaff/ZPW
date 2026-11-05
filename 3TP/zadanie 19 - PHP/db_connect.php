<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "warehouse";

//Tworzenie połączenia
$conn = mysqli_connect($host, $username, $password, $database);

if(!$conn){
    die("Połączenie nie powiodło się.");
}

?> 