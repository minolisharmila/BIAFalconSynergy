<?php
$servername = "localhost";
$username = "konnexio";
$password = "Kon@BIA098";
$dbname = "konnexio";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>