<?php
$servername = "localhost";
$username = "acco12";
$password = "qwerty";
$database = "junnuliiga";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
