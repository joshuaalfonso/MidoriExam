<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login.css?v=2">
    <style>
    </style>
</head>
<body>

<div class="container">
        <div class="title"><h2>Log In</h2></div>
        <form autocomplete="off" action="function.php" method="post">

            <div class="user-details">
                <div class="input-box">
                    <label for="">Username:</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username">
                </div>
                    <br>
                <div class="input-box">
                    <label for="">Password:</label>
                    <input type="password" id="password" name="password"value="" placeholder="Enter your password">
                </div>
                
            </div>
            <button name="login">Submit</button>
            <a href="register.php" class="link">Don't have an account yet?</a>
        </form>
    </div>

    <script>
    </script>
</body>
</html>