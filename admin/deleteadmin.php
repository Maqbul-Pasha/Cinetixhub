<?php

include 'db.php';

session_start();

if (isset($_SESSION['loginsuccesfull'])) {
    if (isset($_GET['uid'])) {
        $id = $_GET['uid'];
        $query = "DELETE FROM ADMINS WHERE ADMIN_ID = $id";
        $run = mysqli_query($con, $query);
        
        if ($run) {
            echo "<script>
            alert('Admin has been successfully deleted');
            window.location.href='listadmins.php';
            </script>";
        } else {
            echo "<script>
            alert('Something went wrong! Please try again');
            window.location.href='listadmins.php';
            </script>";
        }
    } else {
        echo "<script>
        alert('Admin ID not provided');
        window.location.href='listadmins.php';
        </script>";
    }
    
}
else {
    echo "<script>
              alert('You are not logged in! Please login and visit home page');
              window.location.href='login.php';
              </script>";
}



?>