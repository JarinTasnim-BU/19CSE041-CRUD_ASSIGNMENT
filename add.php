<?php
  include 'connect.php';
  $name='Jackfruit';
  $description='Big';
  $quantity=1;
  $price=500;
  $expire_date='2023-11-30';
  if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $description=$_POST['description'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];
    $expire_date=$_POST['expire_date'];

    $sql="INSERT INTO `crud` (`id`, `name`, `description`, `quantity`, `price`, `expire_date`) VALUES (NULL, '$name', '$description', '$quantity', '$price', '$expire_date')";
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
        <button type="submit" class="btn btn-outline-success" name="submit">Add</button>
        <a href="index.php" class="btn btn-outline-danger" role="button">Cancel</a>
      </form>
    </div>  
  </body>
</html>