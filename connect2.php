<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "librarydb";

$con = new mysqli($host, $user, $pass, $db);
if(!$con){
  echo "There is some problem";
}
    $first_name = $_POST['f_name'];
    $last_name = $_POST['l_name'];
    $department = $_POST['d_name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    

$conn = new mysqli("localhost", "root", "", "librarydb");
if($conn->connect_error)
{
    die("Connection Failed:" .$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into second(first_name,last_name,department,email,date)
    values(?,?,?,?,?)");
    $stmt->bind_param("sssss", $first_name, $last_name, $department, $email, $date);
    $stmt->execute();
    echo "registration successfull.....";
    $stmt->close();
    $conn->close();
}
?>