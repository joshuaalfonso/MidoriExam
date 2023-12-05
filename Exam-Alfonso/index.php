 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css?v=5">
    <style> 
    </style>
 </head>
 <body>

    <header>
        <div class="logo">
            <h2>ADMIN</h2>
        </div>
        <ul class="navlist">
            <li><a href="index.php" class="nav active">Userlist</a></li>
            <li><a href="locker.php" class="nav">Locker</a></li>
            <li><a href="login.php"><i class='bx bx-log-out'></i></a></li>
        </ul> 
    </header>

   <div class="body">
        <!-- table -->
        <div class="container">
                <div class="title">
                    <h2>User List</h2>
                    <div class="search-container">
                        <!-- <h2>Search Data</h2> -->
                        <input type="text" id="getName" class="search" placeholder="Search User">
                    </div>
                </div>
                <div class="message-container">
                    <p id="msg" class="msgg"></p>
                </div>

                <table>
                    <thead class="thead">
                        <tr>
                            <th>user</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Date</th>
                            <th>STATUS</th>
                            <th>EMAIL</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody id="tbody">
                    </tbody>
                </table>
        </div>

        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Edit User</h2>
                    <form action="" method="post" enctype="multipart/form-data">
                        <p id="message"></p><br>

                        <div class="user-details">
                        <div class="input-box">
                            <input type="hidden" name="Id" id="Id">
                            <label for="">First Name:</label>
                            <input required type="text" id="Firstname" value="" placeholder="Enter your first name">
                        </div>
                            
                        <div class="input-box">
                            <label for="">Last Name:</label>
                            <input type="text" id="Lastname" value="" placeholder="Enter your last name" required>
                        </div>
                        
                        <div class="input-box">
                            <label for="">Username:</label>
                            <input type="text" id="Username" value="" placeholder="Enter your username">
                        </div>
                            
                        <div class="input-box">
                            <label for="">Email:</label>
                            <input type="text" id="Email" value="" placeholder="Enter your email">
                        </div>
                    
                        <div class="input-box">
                            <label for="">Date:</label>
                            <input type="date" id="Date" value="">
                        </div>
                            
                        <div class="input-box">
                            <label for="">Password:</label>
                            <input type="password" id="Password" value="" placeholder="Enter your password">    
                        </div>
                            
                        <div class="input-box">
                            <label class="details">Profile Picture:</label>
                            <input type="file" id="Profilepic" value="">    
                            <label for="Profilepic" class="file">Choose a file</label>
                        </div>
                            
                        <div class="input-box">
                            <label for="">Status:</label>
                            <select class="" id="Status">
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                                <option value="Pending">Pending</option>
                            </select>
                        </div>
                    </div>

                    <button type="button" id="updateData">Submit</button>
                
                </form>
            </div>

        </div>
   </div>
    

     
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="script.js?v2"></script>
    <script>
        let modal = document.getElementById("myModal");
        let btn = document.getElementsByClassName("editBtn");
        let span = document.getElementsByClassName("close")[0];

        span.onclick = function() {
        modal.style.display = "none";
        }

        window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
            }
        }
    </script>

    <script>
        $(document).ready(function() {
            $('#getName').on("keyup", function() {
                var name = $(this).val();
            $.ajax({
                url: 'function.php',
                method: 'post',
                data: {action: 'search', name: name},
                success: function(data)
                {
                    $("#tbody").html(data);
                }
            })
            })
        })
    </script>

 </body>
 </html>