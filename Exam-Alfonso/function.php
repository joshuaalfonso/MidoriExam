 <?php 

  function login()
  {
    $conn = mysqli_connect('localhost', 'root', '', 'midori_exam'); 
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `user_tbl` WHERE `username` = '$username' AND `password` = '$password' ";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        header("Location: index.php");
    } else {
        echo '<script>
                window.location.href = "login.php"; 
                alert("Login Failed. Invalid username or password");
              </script>'; 
    }
  }


  function insertData()
  {
      $conn = mysqli_connect('localhost', 'root', '', 'midori_exam'); 

      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $username = $_POST['username'];
      $email = $_POST['email'];
      $date = $_POST['date'];
      $pass = $_POST['password'];
      $password = sha1($pass);
      $image = $_POST['image'];
      $status = $_POST['status'];

      $query = "INSERT INTO `user_tbl` (`image`, `username`, `password`, `firstname`, `lastname`, `date`, `status`, `email`)
                              VALUES ('$image', '$username', '$password', '$firstname', '$lastname', '$date', '$status', '$email')";
      $result = mysqli_query($conn, $query);

      if ($result) {
         echo 'Your Record Has been saved to Database';
      }
      else 'error';
  }


  function displayData() 
  {
      $conn = mysqli_connect('localhost', 'root', '', 'midori_exam'); 

      $query = "SELECT * FROM `user_tbl`";
      $result = mysqli_query($conn, $query);
      
      while ($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
      }
      echo json_encode($data);
  }



  function editData()
  {
    $conn = mysqli_connect('localhost', 'root', '', 'midori_exam');
    $id = $_POST['id'];
    $query = "SELECT * FROM `user_tbl` WHERE id = $id";

    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_assoc($result);

    echo json_encode($row);
  }


  function updateData()
  {
    $conn = mysqli_connect('localhost', 'root', '', 'midori_exam');

    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $pass = $_POST['password'];
    $password = sha1($pass);
    $status = $_POST['status'];
    $image = $_POST['image'];
    
    $query = "UPDATE `user_tbl` SET `firstname` = '$firstname', `lastname` = '$lastname', `username` = '$username', 
              `email` = '$email', `date` = '$date', `password` = '$password', `status` = '$status', `image` = '$image' WHERE id = $id";

    $result = mysqli_query($conn, $query);
    
    if ($result) {
        echo "<i class='bx bxs-check-circle'></i> Updated Successfully";
    } else {
        echo "Error";
    }
  }
   

  function deleteData()
  {
    $conn = mysqli_connect('localhost', 'root', '', 'midori_exam'); 
    $id = $_POST["id"];

    $query = "DELETE FROM `user_tbl` WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if ($result)
    {
        echo "<i class='bx bxs-check-circle'></i> Successfully Deleted";
    } else {
        echo "Not Deleted";
    }

  }


  function searchData()
  {
    $conn = mysqli_connect('localhost', 'root', '', 'midori_exam'); 
    $name = $_POST['name'];

    $query = "SELECT * FROM `user_tbl` WHERE firstname LIKE '$name%' OR lastname LIKE '$name%'";
    $result = mysqli_query($conn, $query);

    $data ='';
    while ($row = mysqli_fetch_assoc($result))
    {
      $data = "<tr><td><img src=img/2.png></td><td>" .$row['firstname']. "</td><td>" .$row['lastname']. "</td><td>"  .$row['date']. 
      "</td><td><p class='status ".$row['status']." '>" .$row['status']. "</p></td><td>" .$row['email'].  "</td><td class='actions'><span id='editBtn' class='editBtn edit' data-id=".$row['id']."><i class='bx bx-edit-alt edit'></i></span>
      <span id='deleteBtn' class='delete' data-id=" .$row['id']. "><i class='bx bx-trash'></i></span></td></tr>";

      echo $data;
    }
  }


  if (isset($_POST['action'])) 
  {
    $action = $_POST['action'];
    if ($action === 'insert') {
       insertData();
    }
    else if ($action === 'edit') 
    {
        editData();
    }
    else if ($action === 'update') 
     {
      updateData();
     }
    else if($action === 'delete') 
     {
      deleteData();
     }
    else if($action === 'login') 
     {
      login();
     }
     else if($action === 'search') 
     {
      searchData();
     }
  }      

  if (isset($_POST["login"])) 
  {
    login();
  };  

  if ($_SERVER['REQUEST_METHOD'] === 'GET') 
  {
      $displayResult = displayData();
      echo $displayResult;
  }

 ?>