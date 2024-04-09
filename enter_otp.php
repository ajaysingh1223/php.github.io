<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter OTP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Enter OTP</h2>
        <form action="verify_otp.php" method="post">
            <div class="form-group">
                <label for="otp">Enter OTP:</label>
                <input type="text" id="otp" name="otp" required><br><br>
            </div>
            <button type="submit">Verify OTP</button>
        </form>
    </div>
</body>
</html>
