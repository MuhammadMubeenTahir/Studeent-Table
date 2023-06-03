<?php
include 'config.php';


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <button class="btn btn-primary mt-5"><a href="insert.php" class="text-light">Add Student</a></button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Roll Number</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Class</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $sql = "select * from student";
      $result = mysqli_query($conn,$sql);
      if($result){
        while($row = mysqli_fetch_assoc($result)){
          $id = $row['id'];
          $r_number = $row['roll_num'];
          $f_name = $row['first_name'];
          $l_name = $row['last_name'];
          $class= $row['class'];
          print_r('<tr>
          <th scope="row">'.$id.'</th>
          <td>'.$r_number.'</td>
          <td>'.$f_name.'</td>
          <td>'.$l_name.'</td>
          <td>'.$class.'</td>
          <td>
          <button class="btn btn-info btn-sm"><a href="view.php?viewid='.$id.'" class="text-light">View</a></button>
          <button class="btn btn-primary btn-sm"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
          <button class="btn btn-danger btn-sm"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
          </td>
        </tr>');
        }
      }
    ?>

  </tbody>
</table>
    </div>
  </body>
</html>