<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "book";



$conn= mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    die("Error".mysqli_connect_error());

}