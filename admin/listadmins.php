<?php
include 'db.php';
include './includes/header.php';
include './includes/footer.php';

?>

<!-- table start -->
<div class="container">
	<div class="head" style="padding-top: 10px; padding-bottom: 10px; text-align: center;">
	<h1>Admins of CineTixHub</h1>
	<hr>
	</div>
	<table class="table table-bordered table-dark">
      <thead>
        <tr>
          <th scope="col">Admin_ID</th>
          <th scope="col">Email</th>
          <th scope="col">Password</th>
          <th scope="col">Created On</th>
          <th scope="col">Updated On</th>
          <th scope="col">CRUD</th>
        </tr>
      </thead>
      	<?php 
          $query = "SELECT * FROM ADMINS";
          $run = mysqli_query($con,$query);
          if($run) {
              while ($row = mysqli_fetch_assoc($run)){
          ?>                  
      <tbody>
        <tr>
          <th scope="row"><?php echo $row['admin_id']; ?></th>
          <td><?php echo $row['email']; ?></td>
          <td><pre style="color: white;">Password Encrypted</pre></td>
          <td><?php echo $row['created_at']; ?></td>
          <td><?php echo $row['updated_at']; ?></td>
          <td><a class="btn btn-danger" href="deleteadmin.php?uid=<?php echo $row['admin_id'];?>">Delete</a>  
          <a class="btn btn-success" href="registeradmin.php">New Admin</a></td>
        </tr>
        <?php 
             }
          }
          
          ?>
      </tbody>
    </table>
</div>

<!-- table end -->