<?php
if(isset($_POST['submit'])){
    include "connection.php";
    $username = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    $count_user = mysqli_num_rows($result);

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $count_email = mysqli_num_rows($result);

    if($count_user == 0 && $count_email == 0){
        if($password == $confirmPassword){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hash')";
            $result = mysqli_query($conn, $sql);
            if($result){
                // Redirect to success page or login page
                header("Location: index.php");
                exit();
            } //else {
                //$error = "Error: " . mysqli_error($conn);
            //}
        } else {
            $error = "Password do not match!";
        }
    } else {
        $error = "Username alerdy exit!!";
    
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Signup Page</title>
    <style>
        /* Add your CSS styling here */
        body{
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
            width: 100%;
            margin-bottom: 10px;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <?php include "navbar.php"; ?>
    <div id="form">
        <h1>Signup Page</h1>
        <?php if(isset($error)): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
        <form name="form" action="singnup.php" method="post">
            <label for="user">Enter username</label>
            <input type="text" id="user" name="user" required><br><br>
            <label for="email">Enter Email</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="password">Enter Password</label>
            <input type="password" id="password" name="password" required><br><br>
            <label for="confirmPassword">Retype Password</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required><br><br>
            <input type="submit" id="btn" value="Signup"name="submit"/>
        </form>
    </div>
</body>
</html>
