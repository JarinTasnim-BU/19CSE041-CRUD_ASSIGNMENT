<?php
  include 'connect.php';
?>
<!doctype html>
<html>
  <head>
    <title>CRUD Assignment</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  </head>
  <body>
    <div style="text-align:center" class="container">
      <p class="btn btn-info my-5 btn-lg" role="button"><b>CRUD Assignment<br>Jarin Tasnim<br>19CSE041</b></p>
    </div>
    <div style="text-align:center" class="container">
      <a href="add.php" class="btn btn-outline-success my-5 btn-lg" role="button">Add data</a>
      <table class="table">
        <thead style="background-color:#00FFFF">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Quantity (kg)</th>
            <th scope="col">Price (kg)</th>
            <th scope="col">Expire_date</th>
            <th scope="col">Operations</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $cnt=0;
            $sql="Select * from crud";
            $result=mysqli_query($conn,$sql);
            if($result){
              while($row=mysqli_fetch_assoc($result)){
                $cnt=$cnt+1;
                $color='#FFFFFF';
                if($cnt%2==0){
                  $color='#C0C0C0';
                }
                $id=$row['id'];
                $name=$row['name'];
                $description=$row['description'];
                $quantity=$row['quantity'];
                $price=$row['price'];
                $expire_date=$row['expire_date'];

                echo '<tr style="background-color:'.$color.'">
                  <th scope="row">'.$id.'</th>
                  <td>'.$name.'</td>
                  <td>'.$description.'</td>
                  <td>'.$quantity.'</td>
                  <td>'.$price.'</td>
                  <td>'.$expire_date.'</td>
                  <td>
                    <a href="update.php?updateid='.$id.'" class="btn btn-outline-primary" role="button">Update</a>
                    <a href="delete.php?deleteid='.$id.'" class="btn btn-outline-danger" role="button">Delete</a>
                  </td>
                </tr>';
              }
            }
          ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
