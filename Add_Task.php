<?php
include ("conn.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Add task </title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>

<body>
    <?php include "navbar.php"; ?>
    <h1>ADD Task</h1>
    <form action = "" method = "POST">
        <lable>Name</lable>
        <input type="text"name="name"><br>
        <label>Email</label>
        <input type="email"name="email"><br>
        <label>mobile no </label>
        <input type="mobile"name="mobile"><br>
        <input type = "submit" name="submit">


    </form>
    <?php
// Assuming you've already established a database connection
// You can reuse the database connection code from the previous example

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    // Assuming the database connection is stored in $mysqli
    // Prepare the SQL query
    $sql = "INSERT INTO nii (username, email, mobileno) VALUES ('$name', '$email', '$mobile')";

    // Execute the query
    if ($sql) {
        echo "Pass";
    } else {
        echo "error";
    }
}
?>


  
    
</body>
</html>