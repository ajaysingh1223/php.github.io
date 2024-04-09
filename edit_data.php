<?php
include "connection.php"; // Include your database connection file

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Fetch data for the selected record
    $sql = "SELECT * FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
}

if(isset($_POST['submit'])) {
    // Update data in the database
    $username = $_POST['username'];
    $email = $_POST['email'];
    
    $sql = "UPDATE users SET username = ?, email = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $username, $email, $id);
    $stmt->execute();
    
    // Redirect to the view data page
    header("Location: view_data.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <h2>Edit Data</h2>
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php echo $row['username']; ?>"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>
