<?php
include 'config.php';
if(isset($_GET['viewid'])){
    $id = $_GET['viewid'];
    $sql = "select * from student where id=" . $id;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

}
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
    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Roll Number</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Class</th>
    </tr>
  </thead>
  <tbody>
    <?php
          print_r('<tr>
          <th scope="row">'.$row['id'].'</th>
          <td>'.$row['roll_number'].'</td>
          <td>'.$row['first_name'].'</td>
          <td>'.$row['last_name'].'</td>
          <td>'.$row['class'].'</td>
          </tr>');
    ?>
  </tbody>
</table>
<button class="btn btn-primary mt-5"><a href="index.php" class="text-light">Go Back</a></button>
    </div>
  </body>
</html>