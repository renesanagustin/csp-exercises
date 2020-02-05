<?php

$conn = new mysqli('localhost','root','','stock')or die ("Error: ".mysqli_error($conn));
session_start();
if(isset($POST['save'])){
    if (!empty($_POST['username']) && !empty($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $iQuery = "INSERT INTO stock('equipment_name','quantity') values(?,?)";

        $stmt = $conn->prepare($iQuery);
        $stmt->bind_param("ss", $username,$password);
        if ($stmt->execute()){
          $_SESSION['msg'] = "New record is succesfully inserted.";
          $_SESSION['alert'] = "alert alert-sucess";
        }
        $stmt->close();
        $conn->close();
    } 
    else {
        $_SESSION['msg'] = "Username and password not be empty.";
          $_SESSION['alert'] = "alert alert-warning";

    }
    header("location: Sample1.php");
}

 
?>
