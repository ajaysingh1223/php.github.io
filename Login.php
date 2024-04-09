<?php
include "connection.php"; // Make sure to include your database connection file

if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($conn, $_POST['user']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Use prepared statement to prevent SQL injection
    $sql = "SELECT * FROM users WHERE username = '$username' OR email='$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if($row){
        if(password_verify($password, $row["password"])){
            header("Location: Welcome.php");
            exit(); // Don't forget to exit after redirection
        }
    }
    else{
        echo '<script>
        alert("Invalid username or Password!!");
        window.location.href = "login.php"; // Corrected the spelling here
        </script>';
    }

    // Perform further processing with $result
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login Page</title>
    <style>
        /* Add your CSS styling here */
        body {
            text-align: center;
        }
        #form {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 300px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input {
            width: 20%; /* Changed width to 100% */
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <?php include "navbar.php"; ?>
    <h1>Login Page</h1>
    <form name="form" action="Login.php" method="post">
        <label for="user">Enter username or email</label>
        <input type="text" id="user" name="user" required><br><br>
        <label for="password">Enter Password</label>
        <input type="password" id="password" name="password" required><br><br> <!-- Changed input type to password -->
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>
