<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register.css?v=2">
    <style>
    </style>
</head>
<body>

<!-- Registration -->
<div class="container">
        <div class="title"><h2>Registration</h2></div>
        <p id="message" class="message"></p><br>
        <form autocomplete="off" action="" method="post" enctype="multipart/form-data">

            <div class="user-details">
                <div class="input-box">
                    <label for="">First Name:</label>
                    <input required type="text" id="firstName" value="" placeholder="Enter your first name">
                </div>
                    
                <div class="input-box">
                    <label for="">Last Name:</label>
                    <input type="text" id="lastName" value="" placeholder="Enter your last name" required>
                </div>
                
                <div class="input-box">
                    <label for="">UserName:</label>
                    <input type="text" id="userName" value="" placeholder="Enter your username">
                </div>
                    
                <div class="input-box">
                    <label for="">Email:</label>
                    <input type="text" id="email" value="" placeholder="Enter your email">
                </div>
            
                 <div class="input-box">
                    <label for="">Date Registered:</label>
                    <input type="date" id="dateRegistered" value="">
                </div>
                    
                <div class="input-box">
                     <label for="">Password:</label>
                     <input type="password" id="password" value="" placeholder="Enter your password">    
                </div>
                    
                <div class="input-box">
                    <label class="details">Profile Picture:</label>
                    <input type="file" id="profilePic" value="">    
                    <label for="profilePic" class="file">Choose a file</label>
                </div>
                    
                <div class="input-box">
                    <label for="">Status:</label>
                    <select class="" id="status">
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                        <option value="Pending">Pending</option>
                    </select>
                </div>
            </div>

            <button type="button" id="addNew">Submit</button>
            <a href="login.php" class="link">Already have an account?</a>
            
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="script.js?v2"></script>
    <script>
        
    </script>
    
</body>
</html>