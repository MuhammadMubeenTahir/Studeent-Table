<?php
include 'config.php';
if(isset($_GET['updateid'])){
    $id = $_GET['updateid'];
    $sql = "select * from student where id=" . $id;
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    if(isset($_POST['submit'])){
        $r_number = $_POST['r_number'];
        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
        $class = $_POST['class'];
    $sql = "update student SET roll_number='" . $r_number . "',first_name='" . $f_name . "', last_name='" . $l_name . "', class='" . $class . "' where id=" . $id;
    $result = mysqli_query($conn,$sql);
    if($result){
        header('location:index.php');
    }
    else{
        die(mysqli_error($conn));
    }
    }
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
    <form method="post">
  <div class="mb-3">
    <label class="form-label">Roll Number</label>
    <input type="text" class="form-control" placeholder="Enter Your Roll Number" name="r_number" value="<?php echo $row['roll_number']?>">
  </div>
  <div class="mb-3">
    <label class="form-label">First Name</label>
    <input type="text" class="form-control" placeholder="Enter Your First Name" name="f_name" value="<?php echo $row['first_name']?>">
  </div>
  <div class="mb-3">
    <label class="form-label">Last Name</label>
    <input type="text" class="form-control" placeholder="Enter Your Last Name" name="l_name" value="<?php echo $row['last_name']?>">
  </div>
  <div class="mb-3">
    <label class="form-label">Class</label>
    <input type="text" class="form-control" placeholder="Enter Your Class" name="class" value="<?php echo $row['class']?>">
  </div>
  <button type="submit" class="btn btn-primary" name="submit"><a href="index.php" class="text-light">Go Back</a></button>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>
  </body>
</html>