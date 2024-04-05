<?php 

session_start();

if (isset($_SESSION['loginsuccesfull'])) {}
else {
    echo "<script>
              alert('You are not logged in! Please login and visit home page');
              window.location.href='login.php';
              </script>";
}
?>
<!DOCTYPE html>
<html>
<head>
		<title>CineTixHub Admin</title>`

<!-- Latest compiled and minified CSS (bootstrap cdn) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- Font awesome cdn -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

<!-- navigation bar start -->
<div class = "container">
<h2>CineTixHub Admin Panel</h2>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
     <a class="navbar-brand" href="#">Hi, 
     <?php $up = explode("@", $_SESSION['user']);$un = $up[0]; echo $un;?>
     </a>
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registeradmin.php">Register Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listadmins.php">Admins</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listcategories.php">Categories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./genre/listgenre.php">Genre</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-outline-danger" href="logout.php">Logout</a>
      </li>
    </ul>
    
  </div>
  
</nav>
<!-- navigation bar end -->

