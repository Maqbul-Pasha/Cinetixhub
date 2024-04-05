<?php
include 'db.php';
include './includes/header.php';
include './includes/footer.php';
?>

<?php 
if (isset($_GET['id'], $_GET['catname'], $_GET['forkey'])) {
    $id=$_GET['id'];
    $catname=$_GET['catname'];
    $catid=$_GET['forkey'];
    
    if(isset($_POST['submit'])){
        $cname = $_POST['catename'];
        $pid = $_POST['pid'];
        $foreignkey = $_POST['forekey'];
        
        $query = "UPDATE CATEGORY SET category_id = $foreignkey, category_name = '$cname' WHERE id = $id";
        
        $run = mysqli_query($con, $query);
        
        if ($run) {
            
            echo "<script>
              alert('Category has been updated successfully');
              window.location.href='listcategories.php';
              </script>";
        }
        else {
            echo "<script>
              alert('Something went wrong, Please try again');
              window.location.href='editcategory.php?id=$id&catname=$catname&forkey=$catid';
              </script>";
        }
    }
}

else {
    header('location: listcategories.php');
}

?>

<div class="container">
	<div class="head">
	<div class="jumbotron">
  <h1 class="display-4">Edit a Category</h1>
  <p class="lead">Edit Categories and also mention the Category id</p>
  <hr class="my-4">
 	 <form action="#" method="post">
  	<div class="form-row">
            <div class="col">
            <small>Id (Primary ID)</small>
              <input type="text" class="form-control" name="pid" value="<?php echo $id;?>" placeholder="Enter Id">
            </div>
            <div class="col">
            <small>Category ID (foreign key)</small>
              <input type="text" class="form-control" name="forekey" value="<?php echo $catid;?>" placeholder="Enter category id">
            </div>
            <div class="col-7">
            <small>Category Name</small>
              <input type="text" class="form-control" name="catename" value="<?php echo $catname;?>" placeholder="Enter category name">
            </div>
  	</div>
  	<br><br>
  	<button class="btn btn-primary btn-lg" name="submit" role="button">Edit Category</button>
	</form>  
	</div>
	</div>
	
</div>

