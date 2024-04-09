<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>OTP Verification</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h2>OTP Verification</h2>
        <form action="send_otp.php" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>
            </div>
            <button type="submit">Send Email</button>
        </form>
    </div>
</body>
</html>

