<?php 


    function displayData()
    {
      $conn = mysqli_connect('localhost', 'root', '', 'midori_exam'); 

      $query = "SELECT * FROM `locker_a`";
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
      $query = "SELECT * FROM `locker_a` WHERE id = $id";
  
      $result = mysqli_query($conn, $query);
  
      $row = mysqli_fetch_assoc($result);
  
      echo json_encode($row);
    }

    function updateData()
    {
      $conn = mysqli_connect('localhost', 'root', '', 'midori_exam');

      $id = $_POST['id'];
      $employeeId = $_POST['employeeId'];
      $name = $_POST['name'];

      $query = "UPDATE locker_a SET `employee_id` = '$employeeId', `employee_name` = '$name' WHERE id = $id";
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
  
      $query = "UPDATE locker_a SET `employee_id` = '', `employee_name` = '' WHERE id = '$id'";
      $result = mysqli_query($conn, $query);

      echo $result;
  
    }


    if (isset($_POST['action'])) 
    {
      $action = $_POST['action'];
      if ($action === 'edit') {
         editData();
      } else if ($action === 'update') {
        updateData();
      }
      else if ($action === 'delete') {
        deleteData();
      }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'GET') 
  {
      $displayResult = displayData();
      echo $displayResult;
  }
?>