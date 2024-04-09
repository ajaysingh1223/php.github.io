<?php
$dbhost = "localhost";
$dbname = "ajaybook";
$dbusername = "root";
$dbpass = "";

// Create connection
$mysqli = new mysqli($dbhost, $dbusername, $dbpass, $dbname);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

echo "Connected successfully";
?>
