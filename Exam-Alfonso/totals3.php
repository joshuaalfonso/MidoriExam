<?php
$conn = mysqli_connect('localhost', 'root', '', 'midori_exam');

$query = "SELECT COUNT(*) AS total_count FROM locker_c WHERE `employee_name` = '';";
$result = mysqli_fetch_assoc(mysqli_query($conn, $query));
$count = $result['total_count'];

$sql = "SELECT COUNT(*) AS taken FROM locker_c WHERE employee_name <> ''";
$result2 = mysqli_fetch_assoc(mysqli_query($conn, $sql));
$taken = $result2['taken'];

$response = ['total_count' => $count, 'taken' => $taken];

echo json_encode($response);
?>