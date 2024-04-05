<?php
include 'db.php';
include './includes/header.php';
include './includes/footer.php';
?>

<div class="container">
    <div class="head" style="text-align: center; padding: 10px 0px 10px 0px;">
    <h1>Categories of CineTixHub</h1>
    </div>
	<a href="addcategory.php" class="btn btn-warning text-light" style="margin-left: 85%;">Add a Category</a>
	<hr>
        	<table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Category ID <small>  (foreign key)</small></th>
              <th scope="col">Category Name</th>
              <th scope="col">No. of Posts</th>
              <th scope="col">CRUD Operation</th>
            </tr>
          </thead>
          <?php 
          $query = "SELECT * FROM CATEGORY";
          $run = mysqli_query($con,$query);
          if($run) {
              while ($row = mysqli_fetch_assoc($run)){
          ?>
          <tbody>
            <tr>
              <th scope="row"><?php echo $row['id']; ?></th>
              <td><?php echo $row['category_id']; ?></td>
              <td><?php echo $row['category_name']; ?></td>
              <td><?php echo $row['post']; ?></td>
              <td><a class="btn btn-danger" href="deletecategory.php?did=<?php echo $row['id'];?>">Delete</a>  
          	<a class="btn btn-outline-secondary" href="editcategory.php?id=<?php echo $row['id'];?>&forkey=<?php echo $row['category_id'];?>&catname=<?php echo$row['category_name'];?>">Edit</a></td>
            </tr>
            <?php 
             }
          }
          
          ?>
          </tbody>
        </table>
</div>