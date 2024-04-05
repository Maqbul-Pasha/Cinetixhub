<?php
include 'db.php';
include './includes/header.php';
include './includes/footer.php';
?>

<!-- Registration form start-->
<div class = "container">
	<div class = "head" style="text-align: center;">
	<h1>Register Admin for CineTixHub</h1>
</div>


<form action = "registeradmin.php" method = "post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="uname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<!-- Registration form end-->

<?php 

if (isset($_POST['submit'])){
    $username = $_POST['uname'];
    $pwd = $_POST['pwd'];
    $hash = password_hash("$pwd", PASSWORD_BCRYPT);
    
//     echo $hash;
//     $de = password_verify($pwd,$hash);
    
//     if ($de) {
//         echo "pass";
//     }
//     else {
//         echo "failed";
//     }

    $query = "INSERT INTO admins (email, password) VALUES ('$username','$hash')";    
    //$query = "INSERT INTO 'admins' ('email', 'password') VALUES ('$username','$hash')";
    $run = mysqli_query($con, $query);
    
    if ($run) {
        $_SESSION['loginsuccesfull']=1;
        echo "<script>
              alert('Admin added Successfully');
              window.location.href='index.php';
              </script>";
    }
    else {
        echo "<script>
              alert('Something went wrong, Please try again');
              window.location.href='registeradmin.php';
              </script>";
    }
}


?>