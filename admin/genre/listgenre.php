<?php
include '../db.php';
include '../includes/header.php';
include '../includes/footer.php';
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
          <th scope="col">ID</th>
          <th scope="col">Genre Name</th>
          <th scope="col">Category ID</th>
          <th scope="col">genre_id</th>
          <th scope="col">CRUD</th>
        </tr>
      </thead>
      	<?php 
          $query = "SELECT * FROM GENRE";
          $run = mysqli_query($con,$query);
          if($run) {
              while ($row = mysqli_fetch_assoc($run)){
          ?>                  
      <tbody>
        <tr>
          <th scope="row"><?php echo $row['id']; ?></th>
          <td><?php echo $row['genre_name']; ?></td>
          <td><?php echo $row['category_id']; ?></td>
          <td><?php echo $row['genre_id']; ?></td>
          <td><a class="btn btn-danger" href="deletegenre.php?uid=<?php echo $row['id'];?>">Delete</a>  
          <a class="btn btn-outline-secondary" href="editgenre.php?gid=<?php echo $row['id'];?>&forkey=<?php echo $row['genre_id'];?>&gname=<?php echo$row['genre_name'];?>&cid=<?php echo$row['category_id'];?>">Edit</a></td>
            </tr>
        <?php 
             }
          }
          
          ?>
      </tbody>
    </table>
</div>

<!-- table end -->