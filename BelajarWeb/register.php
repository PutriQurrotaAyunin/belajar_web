<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Design - Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">MyWeb</h2>
            </div>
        </div>

        <div class="content">
            <h1>Web Design & <br><span>Development</span><br>Learn Time</h1>
            <p class="par">Lorem ipsum dolor sit amet consectetur adipisicing.</p>

            <div class="form">
                <h2>Register here</h2>
                <form action="register_process.php" method="POST">
                    <input type="email" name="email" placeholder="Enter email here" required>
                    <input type="password" name="password" placeholder="Enter password here" required>
                    <button class="btnn" type="submit">Register</button>
                </form>

                <p class="link">Already have an account? <a href="index.php">Login</a> here</p>
            </div>
        </div>
    </div>
</body>
</html>
