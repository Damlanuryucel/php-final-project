<?php
include_once '..\database.php';

if (isset($_POST["save"])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];

    $sql = mysqli_query($conn, "SELECT * FROM register where mail='$mail'");
    if (mysqli_num_rows($sql) > 0) {
        echo "Email Id Already Exists";
        exit;
    }
    else{
    $query = "INSERT INTO register (first_name,last_name,mail,password)
	 VALUES ('$first_name','$last_name','$mail','$password')";
    if (mysqli_query($conn, $query)) {
        header("Location: login.php?status=success");
    } else {
        echo "Error: " . $query . "
" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
}
 ?>
