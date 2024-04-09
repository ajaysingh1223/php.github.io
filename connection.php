<?php
$_servername = "localhost";
$_username = "root"; // Make sure this username is correct
$_password = "";
$db_name = "ajaybook";
$conn = new mysqli($_servername, $_username, $_password, $db_name);
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
