<?php

include 'db.php';

session_start();

if (isset($_SESSION['loginsuccesfull'])) {}
else {
    echo "<script>
              alert('You are not logged in! Please login and visit home page');
              window.location.href='login.php';
              </script>";
}

$id = $_GET['did'];
$query = "DELETE FROM CATEGORY WHERE ID = $id";
$run = mysqli_query($con, $query);

if ($run){
    echo "<script>
    alert('Category has been successfully deleted');
    window.location.href='listcategories.php';
    </script>";
}
else {
    echo "<script>
    alert('Something went wrong! Please try again');
    window.location.href='listcategories.php';
    </script>";
}
?>