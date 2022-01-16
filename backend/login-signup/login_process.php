<?php
  include_once '..\database.php';
session_start();
if(isset($_POST['save']))
{
   //extract($_POST);
  
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $sql=mysqli_query($conn,"SELECT * FROM register where mail='$mail' and password='$password'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["id"] = $row['id'];
        $_SESSION["mail"]=$row['mail'];
        $_SESSION["first_name"]=$row['first_name'];
        $_SESSION["last_name"]=$row['last_name']; 
        header("Location:..\home.php"); 
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
?>