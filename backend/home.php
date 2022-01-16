<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Welcome to Employee Portal</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
<nav class="navbar navbar-inverse>
<div class="signup-form">
    <form action="home.php" method="post" enctype="multipart/form-data">
		<h2>Welcome</h2>
        <br>

            <?php
				session_start();
				include 'database.php';
				$id= $_SESSION["id"];
				$sql=mysqli_query($conn,"SELECT * FROM register where id='$id' ");
				$row  = mysqli_fetch_array($sql);
            ?>
        <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Employee Portal</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="..\index.php">Admin Panel</a></li>
            
        </ul>
        </div>
		<p class="hint-text"><br><b>Welcome </b><?php echo $_SESSION["first_name"] ?> <?php echo $_SESSION["last_name"] ?></p>
        <div class="text-center">Want to Leave the Page? <br><a href="login-signup\logout.php">Logout</a></div>
    </form>
	
</div>
</nav>

</body>
</html>


