<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "librarydb";

$con = new mysqli($host, $user, $pass, $db);
if(!$con){
  echo "There is some problem";
}
    $branch_id = $_POST['br_id'];
    $branch_name = $_POST['brname'];
    $address = $_POST['address'];
    $due_date = $_POST['MNUM'];
    

$conn = new mysqli("localhost", "root", "", "librarydb");
if($conn->connect_error)
{
    die("Connection Failed:" .$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into branch(branch_id,branch_name,address,due_date)
    values(?,?,?,?)");
    $stmt->bind_param("isss", $branch_id, $branch_name, $address, $due_date);
    $stmt->execute();
    echo "registration successfull.....";
    $stmt->close();
    $conn->close();
}
?>