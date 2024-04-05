<?php
session_start();

include 'db.php';

?>

<!DOCTYPE html>
<html>
<head>
		<title>CineTixHub Admin Login</title>		
<link rel="stylesheet" type="text/css" href="./css/loginstyle.css">
</head>

<body>

<div class="container">
		<div class="left-side">
			<img src="./img/CINETIXHUB.png" alt="Movie Ticket Image" class="image">
		</div>
		<div class="right-side">
			<h1>Admin Login</h1>
			<form action="login.php" method="post">
				<div class="form-field">
					<label for="username"> Username:</label>
					<input type="email" id="username" name="username" placeholder="Enter your email" required>
				</div>
				<div class="form-field">
					<label for="password"> Password:</label>
					<input type="password" id="password" name="pwd" placeholder="Enter your password" required>
				</div>
				<button type="submit" name="submit"class="login-button">Login</button>
			</form>
			
		</div>
	</div>

<?php 

if (isset($_POST['submit'])){
    $user = $_POST['username'];
    $pwd = $_POST['pwd'];
    
    $query = "SELECT * FROM admins where email = '$user'";
    $run = mysqli_query($con, $query);
    // $row = mysqli_num_rows($run);
    
    if (mysqli_num_rows($run)>0) {
        while ($row = mysqli_fetch_assoc($run)){
            if (password_verify($pwd, $row['password'])) {
                $_SESSION['loginsuccesfull']=1;
                $_SESSION['user']=$user;
                echo "<script>
                         alert('Logged in Successfully');
                         window.location.href='index.php';
                      </script>";            
            } else {
                echo "<script>
              alert('Incorrect Credentials! Please Enter valid credentials');
              </script>";
            }
        }
    }
    else {
        echo "<script>
              alert('Incorrect Credentials! Please Enter valid credentials');
              </script>";
    }
}

?>

