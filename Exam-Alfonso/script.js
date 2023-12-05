
$(document).ready(function(){
    readData() ;
    deleteData();
    editData();
    updateData();
    insertRecord();
});

function insertRecord() 
{
    $(document).on('click', '#addNew', function() 
    {
        var firstname = $('#firstName').val();
        var lastname = $('#lastName').val();
        var username = $('#userName').val();
        var email = $('#email').val();
        var date = $('#dateRegistered').val();
        var password = $('#password').val();
        var image = $('#profilePic').val();
        var status = $('#status').val();
        
        if ( firstname == "" || lastname == "" || username == "" || email == "" || date == "" || password == "" || image == "" || status == "")
        {
            $('#message').html('Please fill out the blanks');
        } else {
            $.ajax(
            {
                url: 'function.php',
                method: 'post',
                data: {action: 'insert', firstname: firstname, lastname: lastname, username: username, email: email, 
                    date: date, password: password, image: image, status: status},
                success: function(data)
                {
                    $('#message').html(data);
                    // $('form').trigger('reset');
                    setTimeout(function(){
                    $('#message').html(''); // Clear the content
                    }, 3000);            
                }    
            })
        }
    })       
}


function readData() 
{
    let output = '';
    $.ajax(
    {
        url: 'function.php',
        method: 'get', 
        dataType: 'json',
        success: function(data)
        {
            x = data;
            for (i=0; i<x.length;i++)
            {
                output += 
                "<tr><td><img src=img/2.png></td><td>" + x[i].firstname + "</td><td>" + x[i].lastname + "</td><td>" + 
                x[i].date + "</td><td><p class='status " + x[i].status + "'>" + x[i].status + "</p></td><td>" + x[i].email + "</td><td class='actions'>" +
                "<span id='editBtn' class='editBtn edit' data-id=" + x[i].id + "><i class='bx bx-edit-alt edit'></i></span>" + 
                "<span id='deleteBtn' class='delete' data-id=" + x[i].id + "><i class='bx bx-trash'></i></span></td></tr>";

            }
            $('#tbody').html(output);
        }                   

    })
}
       

function editData()
{
    $('#tbody').on("click", "#editBtn", function()
    {
        document.getElementById("myModal").style.display = "block";
        // console.log('Edit button Clicked');
        let id = $(this).attr('data-id');
        console.log(id);

        $.ajax({
            url: 'function.php',
            method: 'post',
            data: 
            {
                action: 'edit',
                id:id
            },
            dataType: 'json',
            success: function(data)
            {
                console.log(data);
                x = data;
                $('#Id').val(x.id);
                $('#Firstname').val(x.firstname);
                $('#Lastname').val(x.lastname);
                $('#Username').val(x.username);
                $('#Email').val(x.email);
                $('#Date').val(x.date);
                $('#Password').val(x.password);
                $('#Profilepic').val(x.image);
                $('#Status').val(x.status);

            }
        })
    })
}

function updateData() 
{
    $('#myModal').on("click", "#updateData", function()
    {   
        console.log('clicked');
        var id = $('#Id').val();
        var firstname = $('#Firstname').val();
        var lastname = $('#Lastname').val();
        var username = $('#Username').val();
        var email = $('#Email').val();
        var date = $('#Date').val();
        var password = $('#Password').val();
        var image = $('#Profilepic').val();
        var status = $('#Status').val();

        $.ajax(
        {
            url: 'function.php',
            method: 'post',
            data: {action: 'update', id: id, firstname: firstname, lastname: lastname, username: username, 
                email: email, date: date, password: password, image: image, status: status},
            success: function(data)
            {
                $('#message').html(data);
                // $('form').trigger('reset');
                setTimeout(function() {
                $('#message').html(''); 
                }, 3000);
                readData();
            }           
        })
    })
}

function deleteData()
{
    $('#tbody').on("click", "#deleteBtn", function() 
    {
        let id = $(this).attr('data-id');
        console.log(id);
        $.ajax(
         {
            url: 'function.php',
            method: 'post',
            data: {
                action: 'delete',
                id: id
            }, 
            success: function(data)
            {
                console.log(data);
                $('#msg').html(data);
                setTimeout(function() {
                $('#msg').html(''); // Clear the content
                }, 3000);
                readData();  
            }
        }) 
    })

}  