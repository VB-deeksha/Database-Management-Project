<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "librarydb";

$con = new mysqli($host, $user, $pass, $db);
if(!$con){
  echo "There is some problem";
}
     $user_name = $_POST['user_name'];
     $password = $_POST['password'];
     
     $conn = new mysqli("localhost", "root", "", "librarydb");
     if($conn->connect_error)
       {
          die("Connection Failed:" .$conn->connect_error);
       }
     else
     {
        $stmt = $conn->prepare("insert into start(user_name,password)
        values(?, ?)");
        $stmt->bind_param("ss", $user_name, $password);
        $stmt->execute();
        echo "registration successfull.....";
        $stmt->close();
        $conn->close();
      }
      
?>