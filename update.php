<?php
  include 'connect.php';
  $id=$_GET['updateid'];
  $sql="Select * from crud where id=$id";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($result);
  $name=$row['name'];
  $description=$row['description'];
  $quantity=$row['quantity'];
  $price=$row['price'];
  $expire_date=$row['expire_date'];
  if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $description=$_POST['description'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];
    $expire_date=$_POST['expire_date'];

    $sql="update crud set name='$name', description='$description', quantity='$quantity',
    price='$price', expire_date='$expire_date'  where id=$id"; 
    $result=mysqli_query($conn,$sql);
    if($result){
      header('location:index.php');
    }
  }
?>
<!doctype html>
<html>
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Update Product</title>
  </head>
  <body>
    <div style="text-align:center" class="container">
      <p class="btn btn-info my-5 btn-lg" role="button"><b>CRUD Assignment<br>Jarin Tasnim<br>19CSE041</b></p>
    </div>
    <div style="text-align:center" class="container my-5">
      <form method="post" style="margin-left: 33%; margin-right:33%; color:#808000">
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" name="name" autocomplete="off" value=<?php echo $name;?>>
        </div>
        <div class="form-group">
          <label>Description</label>
          <input type="text" class="form-control" name="description" autocomplete="off" value=<?php echo $description;?>>
        </div>
        <div class="form-group">
          <label>Quantity</label>
          <input type="text" class="form-control" name="quantity" autocomplete="off" value=<?php echo $quantity;?>>
        </div>  
        <div class="form-group">
          <label>Price</label>
          <input type="text" class="form-control" name="price" autocomplete="off" value=<?php echo $price;?>>
        </div>
        <div class="form-group">
          <label>Expire_date</label>
          <input type="date" class="form-control" name="expire_date" autocomplete="off" value=<?php echo $expire_date;?>>
        </div><br>
        <button type="submit" class="btn btn-outline-success" name="submit">Update</button>
        <a href="index.php" class="btn btn-outline-danger" role="button">Cancel</a>
      </form>
    </div>  
  </body>
</html>