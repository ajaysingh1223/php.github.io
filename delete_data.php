<?php
include "connection.php"; // Include your database connection file

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Delete the selected record from the database
    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    
    // Redirect to the view data page
    header("Location: view_data.php");
    exit();
}
?>
