<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="locker.css?v4">
</head>
<style>
   h1{
    text-align:center;
    margin-top:30px
   }
   .top{
    display:flex;
    justify-content: space-between;
    padding: 0 25px;
   }
   .total{
    color: #808080;
    font-size: 18px;
    text-align: right;
    border-radius: 5px;
   }
   .total h5{
    font-weight: 500;
   }
   .lockers button{
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-right: 5px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 2px -2px rgba(0,0,0,.5);
    color: gray;
   }
   .lockers button:hover{
    box-shadow: none;
   }
   .lockers .active{
    box-shadow: none;
    /* color: #9b59b6; */
   }
   .lockerh1{
    color: #808080;
   }
  
</style>
<body>
    <header>
        <div class="logo">
            <h2>ADMIN</h2>
        </div>
        <ul class="navlist">
            <li><a href="index.php">Userlist</a></li>
            <li><a href="locker.php" class="nav active">Locker</a></li>
            <li><a href="login.php"><i class='bx bx-log-out'></i></a></li>
        </ul> 
    </header>

    <h1 class="lockerh1">Locker Assignment</h1>

    <section>
        
        <div class="top">
            <div class="lockers">
                <a href="locker.php"><button class="locker">Locker A</button></a>
                <a href="lockerB.php"><button class="locker">Locker B</button></a>
                <a href="lockerC.php"><button class="locker active">Locker C</button></a>
            </div>
            <div class="total">        
                <h5>Available Locker: <span id="availableLocker"></span></h5>  
                <h5>Locker Taken: <span id="takenLocker"></span></h5>
            </div>  
        </div>
        
    
        <div class="table-container">
            <div class="tables" id="tables">
                <table>
                    <thead>
                        <tr>
                            <th>Locker#</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="table-1">

                    </tbody>       
                </table>   
                
                <table>
                    <thead>
                        <tr>
                            <th>Locker#</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="table-2">

                    </tbody>       
                </table>   

                <table>
                    <thead>
                        <tr>
                            <th>Locker#</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="table-3">

                    </tbody>       
                </table>

                <table>
                    <thead>
                        <tr>
                            <th>Locker#</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="table-4">

                    </tbody>       
                </table>

                <table>
                    <thead>
                        <tr>
                            <th>Locker#</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="table-5">

                    </tbody>       
                </table>
            </div>
           
        </div>
    </section>

    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Locker Assignment</h2>
            <p id="message" class="message-container"></p><br>
            <form action="" method="post" enctype="multipart/form-data">

                    <div class="user-details">
                        <div class="input-box">
                            <input type="hidden" name="Id" id="Id">
                            <label for="">Locker #:</label>
                            <!-- <input required type="text" id="lockerNum" value="" > -->
                            <span id="lockerNum" class="lockernum"></span>
                        </div>
                            
                        <div class="input-box">
                            <label for="">Employee ID:</label>
                            <input type="text" id="employeeId" value="" placeholder="Enter employee number">
                        </div>

                        <div class="input-box">
                            <label for="">Employee Name:</label>
                            <input type="text" id="name" value="" placeholder="Enter employee name">
                        </div>
                        
                    </div>

                <button type="button" id="updateData" class="submit">Submit</button>
       
            </form>
        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        let modal = document.getElementById("myModal");
        let btn = document.getElementById("editBtn");
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
        $(document).ready(function(){
            displayTable1();
            displayTable2(); 
            displayTable3(); 
            displayTable4(); 
            displayTable5();
            editData();
            updateData();
            deleteData();
            displayTotals();
        });

        function displayTotals() 
        {
            $.ajax(
            {
                url: 'totals3.php',
                method: 'get',
                dataType: 'json',
                success: function(data) 
                {
                    $('#availableLocker').html(data.total_count);
                    $('#takenLocker').html(data.taken);
                }
             });

        }

        function editData()
        {
            $('#tables').on("click", "#editBtn", function()
            {
                document.getElementById("myModal").style.display = "block";
                let id = $(this).attr('data-id');
                console.log(id);

                $.ajax(
                {
                    url: 'table3.php',
                    method: 'post',
                    data: 
                    {
                        action: 'edit',
                        id: id
                    },
                    dataType: 'json',
                    success: function(data)
                    {
                        // console.log(data);
                        $('#Id').val(data.id);
                        $('#lockerNum').html(data.locker_num);
                        $('#name').val(data.employee_name);
                        $('#employeeId').val(data.employee_id);
                    }
                })
            })
        }

        function updateData()
        {
            $('#myModal').on("click", "#updateData", function()
            {   
                console.log('clicked');
                let id = $('#Id').val();
                let employeeId = $('#employeeId').val();
                let name = $('#name').val();
                // console.log(id);

                $.ajax(
                {
                    url: 'table3.php',
                    method: 'post',
                    data:  {action: 'update', id: id, name: name, employeeId: employeeId},
                    success: function(data)
                    {
                        $('#message').html(data);
                        $('form').trigger('reset');
                        setTimeout(function() {
                        $('#message').html(''); 
                        }, 3000);
                        displayTable1();
                        displayTable2(); 
                        displayTable3(); 
                        displayTable4(); 
                        displayTable5();
                        displayTotals();
                    }
                })
            })
        }

        function deleteData()
        {
            $('#tables').on("click", "#deleteBtn", function()
            {
                let id = $(this).attr('data-id');
                console.log(id);
                $.ajax(
                {
                    url: 'table3.php',
                    method: 'post',
                    data: {
                        action: 'delete',
                        id: id
                    }, 
                    success: function(data)
                    {
                        console.log(data);
                        // $('#msg').html(data);
                        // setTimeout(function() {
                        // $('#msg').html(''); // Clear the content
                        // }, 3000);
                        // readData();  
                        displayTable1();
                        displayTable2(); 
                        displayTable3(); 
                        displayTable4(); 
                        displayTable5();
                        displayTotals();
                    }
                }) 
            })
        }
        
        function displayTable1() 
        {
            let output = '';
            $.ajax(
            {
                url: 'table3.php',
                method: 'get',
                dataType: 'json',
                success: function(data)
                {
                    x = data;
                    for (i=0; i < 10;i++)
                    {
                        output += 
                        "<tr><td>" + x[i].locker_num + "</td><td>"+ x[i].employee_name +"</td><td><span id='editBtn' class='edit' data-id='"+ x[i].id +"'><i class='bx bx-edit-alt'></i></i></span><span id='deleteBtn' class='delete' data-id='" +x[i].id + "'><i class='bx bx-trash'></i></span></td></tr>";
                    }
                    $('#table-1').html(output);
                }
            })
        }

        function displayTable2() 
        {
            let output = '';
            $.ajax(
            {
                url: 'table3.php',
                method: 'get',
                dataType: 'json',
                success: function(data)
                {
                    x = data;
                    for (i=10; i < 20;i++)
                    {
                        output += 
                        "<tr><td>" + x[i].locker_num + "</td><td>"+ x[i].employee_name +"</td><td><span id='editBtn' class='edit' data-id='"+ x[i].id +"'><i class='bx bx-edit-alt'></i></i></span><span id='deleteBtn' class='delete' data-id='" +x[i].id + "'><i class='bx bx-trash'></i></span></td></tr>";
                    }
                    $('#table-2').html(output);
                }
            })
        }

        function displayTable3() 
        {
            let output = '';
            $.ajax(
            {
                url: 'table3.php',
                method: 'get',
                dataType: 'json',
                success: function(data)
                {
                    x = data;
                    for (i=20; i < 30;i++)
                    {
                        output += 
                        "<tr><td>" + x[i].locker_num + "</td><td>"+ x[i].employee_name +"</td><td><span id='editBtn' class='edit' data-id='"+ x[i].id +"'><i class='bx bx-edit-alt'></i></i></span><span id='deleteBtn' class='delete' data-id='" +x[i].id + "'><i class='bx bx-trash'></i></span></td></tr>";
                    }
                    $('#table-3').html(output);
                }
            })
        }

        function displayTable4() 
        {
            let output = '';
            $.ajax(
            {
                url: 'table3.php',
                method: 'get',
                dataType: 'json',
                success: function(data)
                {
                    x = data;
                    for (i=30; i < 40;i++)
                    {
                        output += 
                        "<tr><td>" + x[i].locker_num + "</td><td>"+ x[i].employee_name +"</td><td><span id='editBtn' class='edit' data-id='"+ x[i].id +"'><i class='bx bx-edit-alt'></i></i></span><span id='deleteBtn' class='delete' data-id='" +x[i].id + "'><i class='bx bx-trash'></i></span></td></tr>";
                    }
                    $('#table-4').html(output);
                }
            })
        }

        function displayTable5() 
        {
            let output = '';
            $.ajax(
            {
                url: 'table3.php',
                method: 'get',
                dataType: 'json',
                success: function(data)
                {
                    x = data;
                    for (i=40; i < 50;i++)
                    {
                        output += 
                        "<tr><td>" + x[i].locker_num + "</td><td>"+ x[i].employee_name +"</td><td><span id='editBtn' class='edit' data-id='"+ x[i].id +"'><i class='bx bx-edit-alt'></i></i></span><span id='deleteBtn' class='delete' data-id='" +x[i].id + "'><i class='bx bx-trash'></i></span></td></tr>";
                    }
                    $('#table-5').html(output);
                }
            })
        }


    </script>
   
    
</body>
</html>



