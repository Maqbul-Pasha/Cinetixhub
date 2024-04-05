<?php
include 'db.php';
include './includes/header.php';
include './includes/footer.php';
?>

<div class="container">
    <div class="head">
    <div class="jumbotron">
  <h1 class="display-4">Add a Category</h1>
  <p class="lead">Add Categories and also mention the Category id</p>
  <hr class="my-4">
 	 <form action="addcategory.php" method="post">
  	<div class="form-row">
            <div class="col-7">
              <input type="text" name="catname" class="form-control" placeholder="Category Name">
            </div>
            <div class="col">
              <input type="text" name="catid" class="form-control" placeholder="Category ID">
            </div>
  	</div>
  	<br><br>
  	<button class="btn btn-primary btn-lg" name="submit" role="button">Add Category</button>
	</form>  
	</div>
   </div>
</div>

<?php 

if (isset($_POST['submit'])) {
    $catname = $_POST['catname'];
    $catid = $_POST['catid'];
    
    $query = "INSERT INTO category (category_id,category_name) VALUES ($catid,'$catname')";
    $run = mysqli_query($con, $query);
    
    if($run) {
        echo "<script>
              alert('Category got successfully added');
              window.location.href='listcategories.php';
              </script>";
    }
    else {
        echo "<script>
              alert('Something went wrong, Please try again');
              window.location.href='addcategory.php';
              </script>";
    }
}
?>