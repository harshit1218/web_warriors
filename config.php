<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'health';


$conn = mysqli_connect("localhost", "root","","health");

if(!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}


?>