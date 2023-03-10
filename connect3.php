<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "librarydb";

$con = new mysqli($host, $user, $pass, $db);
if(!$con){
  echo "There is some problem";
}
    $book_id = $_POST['b_id'];
    $book_name = $_POST['bname'];
    $book_author = $_POST['bauthor'];
    $date_of_issue = $_POST['MNUM'];
    

$conn = new mysqli("localhost", "root", "", "librarydb");
if($conn->connect_error)
{
    die("Connection Failed:" .$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into last(book_id,book_name,book_author,date_of_issue)
    values(?,?,?,?)");
    $stmt->bind_param("isss", $book_id, $book_name, $book_author, $date_of_issue);
    $stmt->execute();
    echo "registration successfull.....";
    $stmt->close();
    $conn->close();
}
?>